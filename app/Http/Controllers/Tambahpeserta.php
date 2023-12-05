<?php

namespace App\Http\Controllers;
use App\Models\datajenispelatihan;
use Illuminate\Http\Request;
use App\Models\datapeserta;
use App\Models\Datanilai;
use Illuminate\Support\Facades\DB;
class Tambahpeserta extends Controller
{
    public function Tambahpeserta(){

       
        $dtpelatihan = datajenispelatihan::all();
        $cek = datapeserta::count();
        if ($cek == 0) {
            $urut = 10001;
            $nomor = 'NP' . $urut;

        } else {
            $ambil = datapeserta::all()->last();
            $urut = (int)substr($ambil->No_peserta, -5) + 1;
            $nomor = 'NP' . $urut; 
        }

        return view('dashboard/Admin/layouts/DataPeserta/Tambahpeserta',compact('dtpelatihan','nomor'));
    }


    public function index(Request $request)
    {
        $dtpeserta = datapeserta::latest();

        if($request->has('search')){
            $dtpeserta = datapeserta::where('Nama_peserta','like','%' .$request->search.'%')
            ->orWhere('No_peserta','like','%' .$request->search.'%')
            ->orWhere('J_kelamin','like','%' .$request->search.'%')
            ->orWhere('No_tlpn','like','%' .$request->search.'%')
            ->orWhere('email','like','%' .$request->search.'%')
            ->orWhere('alamat','like','%' .$request->search.'%')
            ->orWhere('NPelatihan','like','%' .$request->search.'%')->paginate(10);

            
        }else{
            $dtpeserta = datapeserta::paginate(10);
            
        }
      
        return view('dashboard.Admin/layouts/DataPeserta/DataPeserta',compact('dtpeserta'));
    }
 /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validateData = $request->validate([
           'No_peserta' => 'required|max:10|unique:datapesertas',
           'Nama_peserta' => 'required','min:3','max:255',
           'J_kelamin'   => 'required','min:3','max:255',
           'No_tlpn' => 'required|min:11|max:13',
           'email' => 'required|email:dns|unique:datapesertas',
           'alamat' => 'required|min:3|max:255',
           'NPelatihan' => 'required|min:3|max:255'
       ]);

       datapeserta::create($validateData);
    //    $request->session()->flash('success', 'Data Admin Telah Berhasil Di Tambahkan');
        $data = $request->all();
        
        $dtnilai =  new Datanilai;
        $dtnilai->No_peserta = $data['No_peserta'];
        $dtnilai->Nama_peserta = $data['Nama_peserta'];
        $dtnilai->NPelatihan = $data['NPelatihan'];
        $dtnilai->J_kelamin = $data['J_kelamin'];
        $dtnilai->No_tlpn = $data['No_tlpn'];
        $dtnilai->alamat = $data['alamat'];
        $dtnilai->email = $data['email'];
        $dtnilai->save();
      


       return redirect('/dashboard/Admin/layouts/DataPeserta')->with('success', 'Data Peserta Telah Berhasil Di Tambahkan');
       
    }

    public function Gagal(){
        return redirect('/dashboard/Admin/layouts/DataPeserta')->with('danger', 'Data Peserta Gagal Di Ubah/Edit');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        
        $dtpelatihan = datajenispelatihan::all();
        $dtpeserta = datapeserta::find($id);
        return view('dashboard/Admin/layouts/DataPeserta/Editpeserta',compact('dtpeserta','dtpelatihan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dtpeserta = $request->validate([
           
            
            'No_tlpn' => 'required|min:11|max:13',
           
            
        ]);
        $dt = DB::table('datanilais')->where('id', $id)->first();
        $dtcetak = Datanilai::find($dt->id);
        $dtcetak->update($request->all());

        $dtpeserta = datapeserta::find($id);
        $dtpeserta->update($request->all());

        return redirect('/dashboard/Admin/layouts/DataPeserta')->with('success', 'Data Peserta Telah Berhasil Di Update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dtpeserta = datapeserta::find($id);
        $dtpeserta->delete();
        return redirect('/dashboard/Admin/layouts/DataPeserta')->with('success', 'Data Peserta Telah Berhasil Di Hapus');
    }
}




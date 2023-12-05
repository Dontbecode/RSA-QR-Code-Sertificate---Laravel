<?php

namespace App\Http\Controllers;

use App\Models\Datanilai;
use App\Models\datapeserta;
use Illuminate\Http\Request;
use App\Models\CetakSertifikat;
use App\Models\datajenispelatihan;
use Illuminate\Support\Facades\DB;

class prosescetak extends Controller
{
    /**
     * Display a listing of the resouzrce.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        

        if($request->has('search')){
            $dtcetak = CetakSertifikat::where('No_Sertifikat','like','%' .$request->search.'%')
            ->orWhere('No_peserta','like','%' .$request->search.'%')
            ->orWhere('Nama_peserta','like','%' .$request->search.'%')
            ->orWhere('NPelatihan','like','%' .$request->search.'%')
            ->orWhere('DPelatihan','like','%' .$request->search.'%')->paginate(10);
            

            
        }else{
       
            $dtcetak = CetakSertifikat::where('kehadiran', 'Valid')->get();
            
        }
        return view('/dashboard/Admin/layouts/DataCetakSertifikat/DataCetak',compact('dtcetak'));
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
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateenkrip(Request $request, $id)
    {
        // $dt = CetakSertifikat::where("id_absensi", 'like',"%" .$request->id."%");
        $dt = DB::table('cetak_sertifikats')->where('id_absensi', $id)->first();
       
        if($dt == null){
            $data = $request->all();
            $dtcetak =  new CetakSertifikat;
            $dtcetak->No_Sertifikat = $data['No_Sertifikat'];
            $dtcetak->id_absensi = $data['id'];
            $dtcetak->No_peserta = $data['No_peserta'];
            $dtcetak->Nama_peserta = $data['Nama_peserta'];
            $dtcetak->NPelatihan = $data['NPelatihan'];
            $dtcetak->J_kelamin = $data['J_kelamin'];
            $dtcetak->No_tlpn = $data['No_tlpn'];
            $dtcetak->email = $data['email'];
            $dtcetak->alamat = $data['alamat'];
            $dtcetak->kehadiran = $data['kehadiran'];
            $dtcetak->Nilai = $data['Nilai'];
    
      
            $dtcetak->Kode_Enkripsi = $data['Kode_Enkripsi'];
       
            $dtcetak->save();
        }else {

            // dd($dt->id);
          
        $dtcetak = CetakSertifikat::find($dt->id);
       
     
        $dtcetak->update($request->all());
        }
        // $dt = CetakSertifikat::where("id_absensi", $request->id)->first();
        // // $dt = CetakSertifikat::where('id_absensi','like',"%" .$id."%")->first();
        // if(!$dt){
           
        // $data = $request->all();
        // $dtcetak =  new CetakSertifikat;
        // $dtcetak->No_Sertifikat = $data['No_Sertifikat'];
        // $dtcetak->id_absensi = $data['id'];
        // $dtcetak->No_peserta = $data['No_peserta'];
        // $dtcetak->Nama_peserta = $data['Nama_peserta'];
        // $dtcetak->NPelatihan = $data['NPelatihan'];
  
        // $dtcetak->Kode_Enkripsi = $data['Kode_Enkripsi'];
        // $dtcetak->update();
        // $dtcetak->save();
       
            
        // }else{


        //     $data = $request->all();
        //     $dtcetak =  new CetakSertifikat;
        //     $dtcetak->No_Sertifikat = $data['No_Sertifikat'];
        //     $dtcetak->id_absensi = $data['id'];
        //     $dtcetak->No_peserta = $data['No_peserta'];
        //     $dtcetak->Nama_peserta = $data['Nama_peserta'];
        //     $dtcetak->NPelatihan = $data['NPelatihan'];
        //     $dtcetak->Kode_Enkripsi = $data['Kode_Enkripsi'];
        //     $dtcetak->update();

        // }

        
        return redirect('/dashboard/Admin/layouts/DataNilaidanAbsensi')->with('success', 'Data Nilai dan Absensi Telah Berhasil Di Update');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dtcetak = CetakSertifikat::find($id);
        $dtcetak->delete();
        return redirect('/dashboard/Admin/layouts/DataCetakSertifikat')->with('success', 'Data  Nilai dan Absensi Telah Berhasil Di Hapus');
    }
    public function detail($id)
    {
        
        
        $dtpeserta = DB::table('cetak_sertifikats')->where('id', $id)->first();
        
    
        $Event1 = DB::table('datanilais')->where('No_peserta',$dtpeserta->No_peserta)->first();
        $Event2 = $Event1->tanggal;
        $durasi = $Event1->NPelatihan;
        $Event3 = DB::table('datajenispelatihans')->where('NPelatihan',$durasi)->first();
        $Durasi1 = $Event3->DPelatihan;
        
        // $tanggal = $dtpeserta['No_peserta'];
        // $Event1 = datajenispelatihan::where('NPelatihan','like',"%" .$Event."%")->paginate(1);
        // $Event2 = Datanilai::where('tanggal','like',"%" .$tanggal."%")->paginate(1);

        
        return view('/dashboard/Admin/layouts/DataCetakSertifikat/Detail',compact('dtpeserta','Event1','Event3'));
    }
}
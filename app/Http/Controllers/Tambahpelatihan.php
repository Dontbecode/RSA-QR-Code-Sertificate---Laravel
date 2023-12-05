<?php

namespace App\Http\Controllers;
use App\Models\datajenispelatihan;
use Illuminate\Http\Request;


class Tambahpelatihan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtpelatihan = datajenispelatihan::paginate(10);
        return view('dashboard.Admin/layouts/DataJenisPelatihan/DataJenisPelatihan',compact('dtpelatihan'));
    }

    public function Tambahpelatihan(){
        $cek = datajenispelatihan::count();
        if ($cek == 0) {
            $urut = 101;
            $nomor = $urut;

        } else {
            $ambil = datajenispelatihan::all()->last();
            $urut = (int)substr($ambil->KPelatihan, -4) + 1;
            $nomor = $urut; 
        }
        return view('dashboard.Admin/layouts/DataJenisPelatihan/Tambahpelatihan',compact('nomor'));
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
            'KPelatihan' => 'required|max:3','unique:datapelatihans',
            'NPelatihan' => 'required','max:255',
            'DPelatihan'   =>'required|max:20',
          
        ]);
 
 
        datajenispelatihan::create($validateData);
     //    $request->session()->flash('success', 'Data Admin Telah Berhasil Di Tambahkan');
        return redirect('/dashboard/Admin/layouts/DataJenisPelatihan')->with('success', 'Data Jenis Pelatihan Telah Berhasil Di Tambahkan');
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
        $dtpelatihan = datajenispelatihan::find($id);
        return view('dashboard/Admin/layouts/DataJenisPelatihan/editjenispelatihan',compact('dtpelatihan'));
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
        $dtpelatihan = datajenispelatihan::find($id);
        $dtpelatihan->update($request->all());
        return redirect('/dashboard/Admin/layouts/DataJenisPelatihan')->with('success', 'Data Jenis Pelatihan Telah Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dtpelatihan = datajenispelatihan::find($id);
        $dtpelatihan->delete();
        return redirect('/dashboard/Admin/layouts/DataJenisPelatihan')->with('success', 'Data Jenis Pelatihan Telah Berhasil Di Hapus');
    }

    public function Gagal(){
        return redirect('/dashboard/Admin/layouts/DataJenisPelatihan')->with('danger', 'Data Jenis Pelatihan Gagal Di Ubah/Edit');
    }
   

}

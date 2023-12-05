<?php

namespace App\Http\Controllers;

use App\Models\CetakSertifikat;
use App\Models\Datanilai;
use App\Models\datapeserta;
use Illuminate\Http\Request;
use App\Models\datajenispelatihan;

class prosesnilai extends Controller
{
  
    public function index(Request $request)
    {
        

        $dtpeserta = Datanilai::latest();

        if($request->has('search')){
            $dtpeserta = Datanilai::where('No_peserta','like','%' .$request->search.'%')
            ->orWhere('Nama_peserta','like','%' .$request->search.'%')
            ->orWhere('NPelatihan','like','%' .$request->search.'%')
            ->orWhere('kehadiran','like','%' .$request->search.'%')
            ->orWhere('tanggal','like','%' .$request->search.'%')
            ->orWhere('Nilai','like','%' .$request->search.'%')
            ->orWhere('No_Sertifikat','like','%' .$request->search.'%')->paginate(10);

            
        }else{
            $dtpeserta = Datanilai::paginate(10);
            
        }
      
        return view('/dashboard/Admin/layouts/DataNilaidanAbsensi/DataNilai',compact('dtpeserta'));
    }
    public function Lengkapidata($id)
    {

     
        $dtpeserta = Datanilai::find($id);
        $dt = CetakSertifikat::find($id);
        return view('/dashboard/Admin/layouts/DataNilaidanAbsensi/Lengkapidata',compact('dtpeserta','dt'));
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        
        $dtpeserta = Datanilai::find($id);
        $dtpeserta->update($request->all());
      
        return view('/dashboard/Admin/layouts/DataNilaidanAbsensi/Lengkapidata',compact('dtpeserta'));
    }
   
    public function destroy($id)
    {
        $dtnilai = Datanilai::find($id);
        $dtnilai->delete();
        return redirect('/dashboard/Admin/layouts/DataNilaidanAbsensi')->with('success', 'Data Peserta Telah Berhasil Di Hapus');
    }
}

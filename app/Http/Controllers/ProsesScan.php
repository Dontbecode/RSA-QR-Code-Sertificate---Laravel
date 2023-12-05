<?php

namespace App\Http\Controllers;

use App\Models\CetakSertifikat;
use App\Models\datajenispelatihan;
use App\Models\Datanilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProsesScan extends Controller
{
    public function scan(){
        return view('/dashboard/Umum/scan');
    }
    public function Dekripsi(){
        return view('/dashboard/Umum/Dekripsi');
    }
    public function Cari(){
        return view('/dashboard/Umum/layouts/Cari');
    }
    public function CariSertifikat(Request $request){
      
                if($request->has('search')){
           
                    $dtcetak = CetakSertifikat::where('No_Sertifikat','like','%' .$request->search.'%')
                    ->orWhere('email','like','%' .$request->search.'%')
                    ->orWhere('Nama_peserta','like','%' .$request->search.'%')
                    ->paginate(10);
                    return view('/dashboard/Umum/layouts/CariSertifikat',compact('dtcetak'));
            }
            
        
     
      


    }
    
    public function detaildata(Request $request){
        
        $details = $request->No_Sertifikat;
        
      
        $dtpeserta = DB::table('cetak_sertifikats')->where('No_Sertifikat', $details)->first();
        
    
        $Event1 = DB::table('datanilais')->where('No_peserta',$dtpeserta->No_peserta)->first();
        $Event2 = $Event1->tanggal;
        $durasi = $Event1->NPelatihan;
        $Event3 = DB::table('datajenispelatihans')->where('NPelatihan',$durasi)->first();
        $Durasi1 = $Event3->DPelatihan;

        
        return view('/dashboard/Umum/Detail',compact('dtpeserta','Event1','Event3'));
    }
 

    public function validasiQrcode(Request $request)
    {
        // dd($request->Kode_Enkripsi);
        
        $qrcode = CetakSertifikat::where("Kode_Enkripsi", $request->Kode_Enkripsi)->first();

        if($qrcode == null){
            return response()->json([
                "status_error" => "Data Sertifikat Tidak Terverifikasi" 
                
            ]);
            
        }

        return response()->json([
            "berhasil" => "Data Sertifikat Terverifikasi" 
        ]);

        

    }
    public function Sertifikat ($id){
        //     $dtpeserta = CetakSertifikat::all();
        //    view()->share('dtpeserta', $dtpeserta);
        //     $pdf =  PDF ::loadview('dashboard/Admin/layouts/Sertifikat/Sertifikat-pdf')->setPaper('a4', 'landscape');
        //     return $pdf->stream('sertifikat.pdf');
            
            $details = $id;
            $dtpeserta = CetakSertifikat::where('id','like',"%" .$details."%")->paginate(5);
            $Event = $dtpeserta['NPelatihan'];
            $Event1 = datajenispelatihan::where('NPelatihan','like',"%" .$Event."%")->paginate(1);
            return view('/dashboard/Umum/layouts/Sertifikat',compact('dtpeserta','Event1'));
        }
}

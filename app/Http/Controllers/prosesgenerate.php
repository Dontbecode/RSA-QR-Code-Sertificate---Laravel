<?php

namespace App\Http\Controllers;

use  PDF;
use Illuminate\Http\Request;
use App\Models\CetakSertifikat;
use App\Models\datajenispelatihan;
use App\Models\tamplatesertifikat;

class prosesgenerate extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $dtpeserta = CetakSertifikat::find($id);
        $dttamplate = tamplatesertifikat::paginate(10);
        return view('/dashboard/Admin/layouts/GenerateSertifikat/GenerateSertifikat',compact('dttamplate','dtpeserta'));
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function generatepdf ($id){
    //     $dtpeserta = CetakSertifikat::all();
    //    view()->share('dtpeserta', $dtpeserta);
    //     $pdf =  PDF ::loadview('dashboard/Admin/layouts/Sertifikat/Sertifikat-pdf')->setPaper('a4', 'landscape');
    //     return $pdf->stream('sertifikat.pdf');
        
        $details = $id;
        $dtpeserta = CetakSertifikat::where('id','like',"%" .$details."%")->paginate(5);
        $Event = $dtpeserta['NPelatihan'];
        $Event1 = datajenispelatihan::where('NPelatihan','like',"%" .$Event."%")->paginate(1);
        return view('dashboard/Admin/layouts/Sertifikat/Sertifikat-pdf',compact('dtpeserta','Event1'));
    }

    public function biru ($id){
    //     $dtpeserta = CetakSertifikat::all();
    //    view()->share('dtpeserta', $dtpeserta);
    //     $pdf =  PDF ::loadview('dashboard/Admin/layouts/Sertifikat/Sertifikat-pdf')->setPaper('a4', 'landscape');
    //     return $pdf->stream('sertifikat.pdf');
        
        $details = $id;
        $dtpeserta = CetakSertifikat::where('id','like',"%" .$details."%")->paginate(5);
        $Event = $dtpeserta['NPelatihan'];
        $Event1 = datajenispelatihan::where('NPelatihan','like',"%" .$Event."%")->paginate(1);
        return view('dashboard/Admin/layouts/Sertifikat/biru',compact('dtpeserta','Event1'));
    }
    public function hijau ($id){
    //     $dtpeserta = CetakSertifikat::all();
    //    view()->share('dtpeserta', $dtpeserta);
    //     $pdf =  PDF ::loadview('dashboard/Admin/layouts/Sertifikat/Sertifikat-pdf')->setPaper('a4', 'landscape');
    //     return $pdf->stream('sertifikat.pdf');
        
        $details = $id;
        $dtpeserta = CetakSertifikat::where('id','like',"%" .$details."%")->paginate(5);
        $Event = $dtpeserta['NPelatihan'];
        $Event1 = datajenispelatihan::where('NPelatihan','like',"%" .$Event."%")->paginate(1);
        return view('dashboard/Admin/layouts/Sertifikat/hijau',compact('dtpeserta','Event1'));
    }
    public function ungu ($id){
    //     $dtpeserta = CetakSertifikat::all();
    //    view()->share('dtpeserta', $dtpeserta);
    //     $pdf =  PDF ::loadview('dashboard/Admin/layouts/Sertifikat/Sertifikat-pdf')->setPaper('a4', 'landscape');
    //     return $pdf->stream('sertifikat.pdf');
        
        $details = $id;
        $dtpeserta = CetakSertifikat::where('id','like',"%" .$details."%")->paginate(5);
        $Event = $dtpeserta['NPelatihan'];
        $Event1 = datajenispelatihan::where('NPelatihan','like',"%" .$Event."%")->paginate(1);
        return view('dashboard/Admin/layouts/Sertifikat/ungu',compact('dtpeserta','Event1'));
    }
    public function orange ($id){
    //     $dtpeserta = CetakSertifikat::all();
    //    view()->share('dtpeserta', $dtpeserta);
    //     $pdf =  PDF ::loadview('dashboard/Admin/layouts/Sertifikat/Sertifikat-pdf')->setPaper('a4', 'landscape');
    //     return $pdf->stream('sertifikat.pdf');
        
        $details = $id;
        $dtpeserta = CetakSertifikat::where('id','like',"%" .$details."%")->paginate(5);
        $Event = $dtpeserta['NPelatihan'];
        $Event1 = datajenispelatihan::where('NPelatihan','like',"%" .$Event."%")->paginate(1);
        return view('dashboard/Admin/layouts/Sertifikat/orange',compact('dtpeserta','Event1'));
    }
}

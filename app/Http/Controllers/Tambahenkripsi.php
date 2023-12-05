<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enkripsi;

class Tambahenkripsi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtenkripsi = Enkripsi::all();
        return view('/dashboard/Admin/layouts/RSA',compact('dtenkripsi'));
    }



    public function Tambahenkripsi()
    {
        return view('/dashboard/Admin/layouts/Tambahenkripsi');
    }
   
   public function enkripsi(Request $request)
   {
        $validateData = $request->validate([
            'text_value' => 'required|max:255',
        ]);

     
        Enkripsi::create($validateData);
    //    $request->session()->flash('success', 'Data Admin Telah Berhasil Di Tambahkan');
        return redirect('/dashboard/Admin/layouts/RSA')->with('success', 'Data Enkripsi Telah Berhasil Di Tambahkan');
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
}

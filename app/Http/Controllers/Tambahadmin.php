<?php

namespace App\Http\Controllers;

use App\Models\CetakSertifikat;
use App\Models\datajenispelatihan;
use App\Models\datapeserta;
use App\Models\tamplatesertifikat;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
class Tambahadmin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
    
        $dtuser = User::all();
        return view('/dashboard/Admin/layouts/DataAdmin/DataAdmin',compact('dtuser'));
    }
    public function dashboard()
    {
        
        $cek = datapeserta::count();
        $cek1 = datajenispelatihan::count();
        $cek2 = CetakSertifikat::count();
        $cek3 = tamplatesertifikat::count();

       return view('dashboard.Admin.index',compact('cek','cek1','cek2','cek3'));
    }

    public function Tambahadmin()
    {
       
        return view('/dashboard/Admin/layouts/DataAdmin/Tambahadmin');
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
           'name' => 'required|max:255',
           'username' => 'required','min:3','max:255','unique:users',
           'nohp'   =>'required|min:11|max:13',
           'email' => 'required|email:dns|unique:users',
           'password' => 'required|min:5|max:255'
       ]);


       $validateData['password'] = hash::make($validateData['password']);

       User::create($validateData);
    //    $request->session()->flash('success', 'Data Admin Telah Berhasil Di Tambahkan');
       return redirect('/dashboard/Admin/layouts/DataAdmin')->with('success', 'Data Admin Telah Berhasil Di Tambahkan');
    }


    public function generate ($id)
    {
        $dtuser = User::findOrFail($id);
        $qrcode = QrCode::size(250)->generate($dtuser->email);
        return redirect('/dashboard/Admin/layouts/DataAdmin',compact('qrcode'))->with('success', 'QR Code Telah Berhasil Di Tambahkan');
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
        $dtuser = User::find($id);
        $dtuser->delete();
        return redirect('/dashboard/Admin/layouts/DataAdmin')->with('success', 'Data Admin Telah Berhasil Di Hapus');
    }
}

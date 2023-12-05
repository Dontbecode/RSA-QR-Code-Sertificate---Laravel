<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tamplatesertifikat;

class Tambahtamplate extends Controller
{

    public function index(){
        $dttamplate = tamplatesertifikat::paginate(5);
        return view('dashboard.Admin/layouts/Tamplatesertifikat/Tamplatesertifikat',compact('dttamplate'));
    }
    public function Tambahtamplate(){
        return view ('/dashboard/Admin/layouts/Tamplatesertifikat/Tambahtamplate');
    }

  
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'Tamplate' => 'required|mimes:jpg,jpeg,png',
        ]);

        $data =  tamplatesertifikat::create($request->all());
        if($request->hasFile('Tamplate')){
            $request->file('Tamplate')->move('uploadtamplate/',$request->file('Tamplate')->getClientOriginalName());
            $data->Tamplate = $request->file('Tamplate')->getClientOriginalName();
            $data->save();
        }
       
       
    //    $request->session()->flash('success', 'Data Admin Telah Berhasil Di Tambahkan');
       return redirect('/dashboard/Admin/layouts/Tamplatesertifikat')->with('success', 'Tamplate Baru Telah Berhasil Di Tambahkan');
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
        //
    }

    public function destroy($id)
    {
        $Tamplate = tamplatesertifikat::find($id);
        $Tamplate->delete();
        return redirect('/dashboard/Admin/layouts/Tamplatesertifikat')->with('success', 'Data Tamplate Telah Berhasil Di Hapus');
    }
}


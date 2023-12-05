
@extends('dashboard.Admin.layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-md-4">
@if(session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
  
  </div>
  @endif
  </div>
</div>
  
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 ml-4 text-gray-800">Data Admin</h1>
  <a href="/dashboard/Admin/layouts/DataAdmin/Tambahadmin" class="d-none mr-4 d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
          class="fas fa-download fa-sm text-white-50"></i> Tambah Data</a>
</div>
<div class="col-xl-12  mb-12">
  <span data-feather="file-text" class="align-text-bottom"></span>
  <div class="table-responsive">
    <table class="table table-striped ">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Admin</th>
          <th scope="col">Email</th>
          <th scope="col">No Handphone</th>
          <th scope="col">QR Code</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @php
          $no = 1;
        @endphp
        @foreach ($dtuser as $user)
        <tr>
          <td>{{ $no++}}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>0{{ $user->nohp }}</td>
          <td> 
            <div>
              {!! QrCode::size(100)->generate($user->email); !!}
            </div>
         </td>
         
          <td>
            <a href="/dashboard/Admin/layouts/DataAdmin/{{ $user->id }}" class="btn btn-danger">Delete</a>
            <button type="button" class="btn btn-warning">Edit</button>
          </td>
        </tr>
        @endforeach
      
       
      </tbody>
    </table>
  </div>
</div>
  @endsection
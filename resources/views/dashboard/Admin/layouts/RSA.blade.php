
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
  <h1 class="h3 ml-4 text-gray-800">Data Enkripsi</h1>
  <a href="/dashboard/Admin/layouts/Tambahenkripsi" class="d-none mr-4 d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
          class="fas fa-download fa-sm text-white-50"></i> Tambah Data</a>
</div>
<div class="col-xl-12  mb-12">
  <span data-feather="file-text" class="align-text-bottom"></span>
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Enkripsi</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
       
        @php
          $no = 1;
        @endphp
        @foreach ($dtenkripsi as $user)
        <tr>
          <td>{{ $no++}}</td>
          <td>{{ $user->text_value }}</td>
        
          <td>
            <a href="/" class="btn btn-danger">Delete</a>
            <button type="button" class="btn btn-warning">Edit</button>
          </td>
        </tr>
        @endforeach
      
       
      </tbody>
    </table>
  </div>
</div>
  @endsection
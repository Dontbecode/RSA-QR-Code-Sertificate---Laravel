
@extends('dashboard.Admin.layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-md-4">
@if(session()->has('success'))
  <div  class="alert alert-success" role="alert">
    {{ session('success') }}
  
  </div>
  @endif
  </div>
</div>

<div class="row justify-content-center">
  <div class="col-md-4">
@if(session()->has('danger'))
  <div  class="alert alert-danger" role="alert">
    {{ session('danger') }}
  
  </div>
  @endif
  </div>
</div>

<script>
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
      $(this).remove(); 
    });
  }, 2000);
</script>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 ml-4 text-gray-800">Data Peserta</h1>
  <a href="/dashboard/Admin/layouts/DataPeserta/Tambahpeserta" class="d-none mr-4 d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
          class="fas fa-download fa-sm text-white-50"></i> Tambah Data</a>
</div>



<div class="row g-3 align-items-center m-2">
  <div class="col-auto ">
    <label for="Search" class="col-form-label">Cari</label>
  </div>

  <div class="col-auto ">
    <form action="/dashboard/Admin/layouts/DataPeserta" method="GET">
    <input type="search" id="Search"  name="search" class="form-control" aria-describedby="passwordHelpInline" value="{{ request('search') }}">
    </form>
  </div>
</div>



<div class="col-xl-12  mb-12">
  <span data-feather="file-text" class="align-text-bottom"></span>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">No Peserta</th>
          <th scope="col">Nama Peserta</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">No Handphone</th>
          <th scope="col">Email</th>
          <th scope="col">Alamat Lengkap</th>
          <th scope="col">Pelatihan Yang Diikuti</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @php
          $no = 1;
        @endphp
        
        @foreach ($dtpeserta as $index => $peserta)
        <tr>
          <td>{{ $index + $dtpeserta->firstItem()}}</td>
          <td>{{ $peserta->No_peserta }}</td>
          <td>{{ $peserta->Nama_peserta }}</td>
          <td>{{ $peserta->J_kelamin }}</td>
          <td>0{{ $peserta->No_tlpn }}</td>
          <td>{{ $peserta->email }}</td>
          <td>{{ $peserta->alamat }}</td>
          <td>{{ $peserta->NPelatihan }}</td>
          <td>
            <a href="/dashboard/Admin/layouts/DataPeserta/Tampil/{{$peserta->id}}" class="btn btn-warning btn-sm">Edit</a>
            <a href="#" class="btn btn-danger btn-sm delete" data-id="{{ $peserta->id }}" data-nama="{{ $peserta->Nama_peserta }}">Hapus</a>
           
          </td>
       
      
        
      </tr>
        @endforeach
      </tbody>
    </table>
    {{ $dtpeserta->links() }}
  </div>
</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
<script>

  $('.delete').click( function(){
    var jenisid = $(this).attr('data-id');
    var jenisnama = $(this).attr('data-nama');
      swal({
        title: "Data "+jenisnama+", Yakin di hapus ?",
        text: "Data "+jenisnama+", data yang di pilih akan di hapus permanen !.",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location = "/dashboard/Admin/layouts/DataPeserta/"+jenisid+""
          swal("Data telah berhasil di hapus!", {
            icon: "success",
            
          });
          
        } else {
          swal("Data "+jenisnama+", tidak jadi di hapus");
        }
        
      });
  });
      
</script>
  @endsection
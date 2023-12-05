
@extends('dashboard.Admin.layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-md-4">
@if(session()->has('success'))
  <div class="alert alert-success " role="alert">
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
  <h1 class="h3 ml-4 text-gray-800">Data Jenis Pelatihan</h1>
  <a href="/dashboard/Admin/layouts/DataJenisPelatihan/Tambahpelatihan" class="d-none mr-4 d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
          class="fas fa-download fa-sm text-white-50"></i> Tambah Data</a>
</div>
<div class="col-xl-12  mb-12">
  <span data-feather="file-text" class="align-text-bottom"></span>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Kode Pelatihan</th>
          <th scope="col">Nama Pelatihan</th>
          <th scope="col">Durasi Pelatihan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @php
          $no = 1;
        @endphp
        @foreach ($dtpelatihan as $index => $pelatihan)
        <tr>
          <td>{{ $index + $dtpelatihan->firstItem()}}</td>
          <td>{{ $pelatihan->KPelatihan }}</td>
          <td>{{ $pelatihan->NPelatihan }}</td>
          <td>{{ $pelatihan->DPelatihan }} Jam</td>
          <td>
            <a href="/dashboard/Admin/layouts/DataJenisPelatihan/Tampil/{{ $pelatihan->id }}" class="btn btn-warning btn-sm">Edit</a>
            <a href="#" class="btn btn-danger btn-sm delete" data-id="{{ $pelatihan->id }}" data-nama="{{ $pelatihan->NPelatihan }}">Hapus</a>
         
        </tr>
        
       
         @endforeach
      </tbody>
    </table>
    {{ $dtpelatihan->links() }}
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
          window.location = "/dashboard/Admin/layouts/DataJenisPelatihan/"+jenisid+""
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
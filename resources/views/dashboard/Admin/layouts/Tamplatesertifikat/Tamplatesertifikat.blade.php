
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
<script>
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
      $(this).remove(); 
    });
  }, 2000);
</script>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 ml-4 text-gray-800">Tamplate Sertifikat</h1>
  <a href="/dashboard/Admin/layouts/Tamplatesertifikat/Tambahtamplate" class="d-none mr-4 d-sm-inline-block btn  btn-primary shadow-sm"><i
          class="fas fa-download fa-sm text-white-50"></i> Tambah Tamplate Sertifikat</a>
</div>
 
<div class="col-xl-12  mb-12">
  <span data-feather="file-text" class="align-text-bottom"></span>
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Tamplate</th>
          <th scope="col">Tamplate</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @php
          $no = 1;
        @endphp
       @foreach ($dttamplate as $index => $item)
        <tr>
          <td>{{ $index + $dttamplate->firstItem()}}</td>
          <td>{{ $item->NTamplate }}</td>
          <td>
            <img src="{{ asset('uploadtamplate/'.$item->Tamplate) }}" alt="" width="250" height="150" >

          </td>
          <td>
            <a href="" class="btn btn-primary btn-sm ">Edit</a>
            <a href="#" class="btn btn-danger btn-sm delete" data-id="{{ $item->id }}" data-nama="{{ $item->NTamplate }}">Delete</a>
          </td>
        </tr>
        @endforeach
       
       
      </tbody>
    </table>
   
  </div>
  {{ $dttamplate->links() }}
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
<script>

  $('.delete').click( function(){
    var jenisid = $(this).attr('data-id');
    var jenisnama = $(this).attr('data-nama');
      swal({
        title: "Data Tamplate "+jenisnama+", Yakin di hapus ?",
        text: "Data Tamplate "+jenisnama+", data yang di pilih akan di hapus permanen !.",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location = "/dashboard/Admin/layouts/Tamplatesertifikat"+jenisid+""
          swal("Data telah berhasil di hapus!", {
            icon: "success",
            
          });
          
        } else {
          swal("Data Tamplate "+jenisnama+", tidak jadi di hapus");
        }
        
      });
  });
      
</script>
  @endsection
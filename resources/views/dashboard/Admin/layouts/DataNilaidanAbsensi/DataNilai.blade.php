
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
  <h1 class="h3 ml-4 text-gray-800">Data Absensi dan Nilai</h1>
</div>
<div class="row g-3 align-items-center m-2">
  <div class="col-auto ">
    <label for="Search" class="col-form-label">Cari</label>
  </div>

  <div class="col-auto ">
    <form action="/dashboard/Admin/layouts/DataNilaidanAbsensi" method="GET">
    <input type="search" id="Search"  name="search" class="form-control" aria-describedby="passwordHelpInline" value="{{ request('search') }}">
    </form>
  </div>
</div>

<div class="col-xl-12  mb-12">
  <span data-feather="file-text" class="align-text-bottom"></span>
  <div class="table-responsive">
    <table class="table table-striped ">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col" hidden>ID</th>
          <th scope="col">No Peserta</th>
          <th scope="col">Nama Peserta</th>
          <th scope="col">Jenis Pelatihan</th>
          <th scope="col">Status</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Nilai</th>
          <th scope="col">No Sertifikat</th>
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
          <td hidden>{{ $peserta->id}}</td>

          <td>{{ $peserta->No_peserta }}</td>
          <td>{{ $peserta->Nama_peserta }}</td>
          <td>{{ $peserta->NPelatihan }}</td>
          <td>{{ $peserta->kehadiran }}</td>
          <td>{{ $peserta->tanggal }}</td>
          <td>{{ $peserta->Nilai }}</td>
          <td>{{ $peserta->No_Sertifikat }}</td>
          <td>
            <a href="/dashboard/Admin/layouts/DataNilaidanAbsensi/Lengkapidata/{{ $peserta->id }}" class="btn btn-primary btn-sm">Lengkapi data</a>
            <a href="#" class="btn btn-danger btn-sm delete" data-id="{{ $peserta->id }}" data-nama="{{ $peserta->Nama_peserta }}">Hapus</a>
            
      
         
       
        @endforeach
      
       
      </tbody>
    </table>
    {{ $dtpeserta->links() }}
  </div>
</div>
<script>
  const No_peserta = document.querySelector('#No_peserta');
  const pusatsains = Object.freeze({ "PUSATSAINfS"});
  const NPelatihan = document.querySelector('#NPelatihan');
  const tanggal    = document.querySelector('#tanggal');
  const No_Sertifikat = document.querySelector('#No_Sertifikat');
  tanggal.addEventListener('change', function()
  {
    fetch('/dashboard###'+ )
    .then(response => response.json())
    .then(data => No_Sertifikat.value = data.No_Sertifikat)
  }); 
  </script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
<script>

  $('.delete').click( function(){
    var jenisid = $(this).attr('data-id');
    var jenisnama = $(this).attr('data-nama');
      swal({
        title: "Data Nilai "+jenisnama+", Yakin di hapus ?",
        text: "Data Nilai "+jenisnama+", data yang di pilih akan di hapus permanen !.",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location = "/dashboard/Admin/layouts/DataNilaidanAbsensi/"+jenisid+""
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
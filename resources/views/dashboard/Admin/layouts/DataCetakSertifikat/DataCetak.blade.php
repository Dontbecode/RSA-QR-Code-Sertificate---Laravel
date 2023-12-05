
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
  <h1 class="h3 ml-4 text-gray-800">Data Sertifikat</h1>
</div>
<div class="row g-3 align-items-center m-2">
  <div class="col-auto ">
    <label for="Search" class="col-form-label">Cari</label>
  </div>

  <div class="col-auto ">
    <form action="/dashboard/Admin/layouts/DataCetakSertifikat" method="GET">
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
          <th scope="col" hidden>ID Absensi</th>
          <th scope="col">No Sertifikat</th>
          <th scope="col">No Peserta</th>
          <th scope="col">Nama Peserta</th>
          <th scope="col">Jenis Pelatihan</th>
          <th scope="col">Status</th>
          {{-- <th scope="col">Kode Enkripsi</th> --}}
          <th scope="col">QR Code</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @php
          $no = 1;
          
        @endphp
         @foreach ($dtcetak as $dtcetak)
         @php
         $isi = "$dtcetak->Kode_Enkripsi" ;
         $isi2 = Str::substr($isi, 0, 25);
         @endphp
        <tr>
          <td>{{ $no++ }}</td>
          <td hidden>{{ $dtcetak->id }}</td>
          <td hidden>{{ $dtcetak->id_absensi }}</td>
          <td>{{ $dtcetak->No_Sertifikat }}</td>
          <td>{{ $dtcetak->No_peserta }}</td>
          <td>{{ $dtcetak->Nama_peserta }}</td>
          <td>{{ $dtcetak->NPelatihan }}</td>
          <td>{{ $dtcetak->kehadiran }}</td>
          {{-- <td>@php echo $isi2 @endphp <br/>.....!! </td> --}}
          <td>{!! QrCode::size(150)->generate($dtcetak->Kode_Enkripsi); !!}</td>
          <td>
            <a href="/dashboard/Admin/layouts/Sertifikat/detail/{{ $dtcetak->id }}" class="btn btn-primary btn-sm" >Lihat Detail</a>
            <a href="#" class="btn btn-danger btn-sm delete" data-id="{{ $dtcetak->id }}" data-nama="{{ $dtcetak->Nama_peserta }}">Hapus</a>
            <hr>
            <label>Cetak Sertifikat</label><br>
            
                  <a href="/dashboard/Admin/layouts/Sertifikat/{{ $dtcetak->id }}" class="btn btn-primary btn-sm mr-2 mt-1"  id="target">Merah</a>
              
                  <a href="/dashboard/Admin/layouts/Sertifikat/biru/{{ $dtcetak->id }}" class="btn btn-primary btn-sm mr-2 mt-1"  id="target">Biru</a>
              
                  <a href="/dashboard/Admin/layouts/Sertifikat/hijau/{{ $dtcetak->id }}" class="btn btn-primary btn-sm mr-2 mt-1"  id="target">Hijau</a>
                  
                  <a href="/dashboard/Admin/layouts/Sertifikat/ungu/{{ $dtcetak->id }}" class="btn btn-primary btn-sm mr-2 mt-1"  id="target">Ungu</a>

                  <a href="/dashboard/Admin/layouts/Sertifikat/orange/{{ $dtcetak->id }}" class="btn btn-primary btn-sm mr-2 mt-1"  id="target">Orange</a>
              
            
      
     
      </tr>
        @endforeach
       
      </tbody>
    </table>
  </div>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
<script>

  $('.delete').click( function(){
    var jenisid = $(this).attr('data-id');
    var jenisnama = $(this).attr('data-nama');
      swal({
        title: "Data Sertifikat "+jenisnama+", Yakin di hapus ?",
        text: "Data Sertifikat "+jenisnama+", data yang di pilih akan di hapus permanen !.",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {

          
         
          swal("Data telah berhasil di hapus!", {
            icon: "success",
            
          });
          setTimeout(function() {
            window.location = "/dashboard/Admin/layouts/DataCetakSertifikat/"+jenisid+""
          }, 3000); 
        } else {
          swal("Data Sertifikat "+jenisnama+", tidak jadi di hapus");
        }
        
      });
  });
      
</script>
  @endsection

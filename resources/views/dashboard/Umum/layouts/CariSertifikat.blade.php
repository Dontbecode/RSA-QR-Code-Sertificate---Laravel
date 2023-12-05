@extends('dashboard.Umum.layouts.main')

@section('container')
<?php 
require_once 'Rsa.php';
$rsa = new Rsa();
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Cari Sertifikat</h1>
        
    </div>

        <div class="container">

            <!-- Outer Row -->
            <div class="row justify-content-center">
    
                <div class="col-xl-10 col-lg-12 col-md-9">
    
                    <div class="card shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                                <div class="text-center" >
                                    <div class="p-5">
                                        <div >
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
                                                      <th scope="col">Download</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    @php
                                                      $no = 1;
                                                      
                                                    @endphp
                                                          @foreach ($dtcetak as $dtcetak)
                                                  
                                                    <tr>
                                                      <td>{{ $no++ }}</td>
                                                      <td>{{ $dtcetak->No_Sertifikat }}</td>
                                                      <td>{{ $dtcetak->No_peserta }}</td>
                                                      <td>{{ $dtcetak->Nama_peserta }}</td>
                                                      <td>{{ $dtcetak->NPelatihan }}</td>
                                                      <td>{{ $dtcetak->kehadiran }}</td>
                                                      <td>{!! QrCode::size(150)->generate($dtcetak->Kode_Enkripsi); !!}</td>
                                            
                                                      
                                                        <td>

                                                        
                                                              <a href="/dashboard/Umum/layouts/Sertifikat/{{ $dtcetak->id }}" class="btn btn-primary  mr-2 mt-1"  id="target">Download</a>

                                                          
                                                        </td>
                                                            
                                                 
                                                  </tr>
                                                  @endforeach
                                                   
                                                  </tbody>
                                                </table>
                                              </div>
                                            

                                            </div>
                                    </div>
                                </div>
                                
                        </div>
                    </div>
    
                </div>
    
            </div>
    
        </div>
                {{-- <!-- Logout Modal-->
            <div class="modal fade" id="validasiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Sertifikat Terverifikasi !</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body"> <form ><input type="text" name="result" style="border:none"id="result" readonly></form></div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="/">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div> --}}
    
        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    
        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>
	
	</body>
@endsection
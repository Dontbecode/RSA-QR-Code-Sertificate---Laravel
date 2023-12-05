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
                                            <h1 class="h4 mb-0 text-gray-800">Masukan Email/Nama Lengkap</h1>
                                          

                                                <div class="form-floating ">
                                                    <div class="col-md-12 mt-2">
                                                    <form action="/CariSertifikat"  method="GET">
                                                            @csrf
                                                            <input type="search" name="search"  id="search" style="border: 1; width: 385px" value="{{ request('search') }}">
                                                        <button class="btn btn-primary w-100 mt-2" type="submit">Cari Sertifikat</button>
                                                </form>
                                                    
                                                    </div>
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
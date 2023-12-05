@extends('dashboard.Umum.layouts.main')

@section('container')
    
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Panduan Penggunaan</h1>
        
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
                                        <center>
                                        <div style="text-align: left;">
                                            <h2 >Panduan Penggunaan </h2>
                                            <p>1. Masuk ke website verifikasi sertifikat pelatihan pusat sains indonesia</p>
                                            <p>2. Pilih menu scan QR-Code</p>
                                            <p>3. Ada 3 pilihan untuk verifikasi Sertifikat</p>
                                            <div class="ml-4">
                                            <p>A. Dengan menggunakan scan kamera</p>
                                            <p>- Izinkan akses Camera</p>
                                            <p>- Lalu arahkan QR Code dari sertifikat ke Camera<p>   
                                            <p>- Tampil Informasi Data Sertifikat<p>    
                                            <p>B. Dengan menggunakan upload gambar<p>       
                                            <p>- Pilih Menu Scan Image<p>       
                                            <p>- Pilih Choose Image<p>       
                                            <p>- Pilih Gambar yang mau di scan<p>       
                                            <p>- Tampil Informasi Data Sertifikat<p>       
                                            <p>C. Dengan menggunakan input no sertifikat<p>       
                                            <p>- Klik Lihat No Sertifikat<p>       
                                            <p>- Masukan No Sertifikat<p>  
                                            <p>- Tampil Informasi Data Sertifikat<p>
                                            </div>      
                                        </div>
                                    </center>
                                    </div>
                                </div>
                        </div>
                    </div>
    
                </div>
    
            </div>
    
        </div>
    
        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    
        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>
	
	</body>
@endsection
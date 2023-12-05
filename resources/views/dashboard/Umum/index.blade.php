@extends('dashboard.Umum.layouts.main')

@section('container')
    
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        
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
                                            <h1 >Verifikasi Sertifikat Pelatihan !!</h1>
                                            <form class="d-flex" role="search">
                                                <a href="/Scan" class="btn btn-primary btn-user btn-block">
                                                    Scan QR Code
                                                </a>
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
        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    
        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>
	
	</body>
@endsection
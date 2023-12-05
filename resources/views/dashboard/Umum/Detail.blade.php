@extends('dashboard.Umum.layouts.main')

@section('container')



<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-20s col-lg-25 col-md-20">

            <div class="card shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                        <div class="text-center" >
                            <div class="p-5">
                                <div >
                                    <div class="jumbotron">
                                        <h3 class="display-4">Data Sertifikat Tercatat di Pusat Sains Indonesia!</h3>
                                    
                                        {{-- <p class="lead">No Sertifikat  :{{$detail->No_Sertifikat}}</p>
                                        <p class="lead">Nomor Peserta  :{{$detail->No_peserta}}</p>
                                        <p class="lead">Nama Peserta   :{{$detail->Nama_peserta}}</p>
                                        <p class="lead">Pelatihan Yang Diikuti :{{$detail->NPelatihan}}</p> --}}
                                        <div class="table-responsive">
                                          <table class="table table-striped table-bordered" >
                                            <thead>
                                              <tr>
                                                <th scope="col">No Sertifikat</th>
                                                <th scope="col">No Peserta</th>
                                                <th scope="col">Nama Peserta</th>
                                                <th scope="col">Jenis Kelamin</th>
                                                <th scope="col">No Telepon</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">alamat</th>
                                                <th scope="col">Pelatihan Yang Diikuti</th>
                                                <th scope="col">Durasi Pelatihan</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Tanggal</th>
                                                <th scope="col">Nilai</th>
                                                
                                              </tr>
                                            </thead>
                                              <tr>
                                                <th >{{$dtpeserta->No_Sertifikat}}</th>
                                                <th >{{$dtpeserta->No_peserta}}</th>
                                                <th >{{$dtpeserta->Nama_peserta}}</th>
                                                <th >{{$dtpeserta->J_Kelamin}}</th>
                                                <th >{{$dtpeserta->No_tlpn}}</th>
                                                <th >{{$dtpeserta->email}}</th>
                                                <th >{{$dtpeserta->alamat}}</th>
                                                <th >{{$dtpeserta->NPelatihan}}</th>
                                                <th >{{$Event3->DPelatihan}} Jam</th>
                                                <th >{{$dtpeserta->kehadiran}}</th>
                                                <th >{{$Event1->tanggal}}</th>
                                                <th >{{$dtpeserta->Nilai}}</th>
                                          
                                            
                                              </tr>
                                            </table>
                                        </div>
                                        <a class="btn btn-primary btn-lg" href="/Scan" role="button">Kembali</a>
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
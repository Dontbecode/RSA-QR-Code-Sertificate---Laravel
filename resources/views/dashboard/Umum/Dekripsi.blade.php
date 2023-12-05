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
                                            <form action="/Scan" method="POST">
                                                @csrf
                                                
                                              <div class="form-floating mb-3">
                                                <input type="number" class="form-control" id="pValue" aria-describedby="pValueHelp" name="p_value" value="11" hidden>
                                            
                                            
                                              </div>
                                          
                                              <div class="form-floating mb-3">
                                                <input type="number" class="form-control" id="qValue" aria-describedby="qValueHelp" name="q_value" value="17"hidden>
                                              </div>
                                              
                                            
                                              </div>
                                              
                                            </form>
                                            <?php
                  
                                            if ( ( isset($_POST['decrypt'])  ) && isset($_POST['p_value']) && isset($_POST['q_value']) && isset($_POST['No_Sertifikat'])  ) {
                                            $p = $_POST['p_value'];
                                            $q = $_POST['q_value'];
                                            $text = $_POST['No_Sertifikat'];
                                            if ( isset($_POST['decrypt']) && preg_match("/[a-zA-Z]/", $text) ) 
                                            {
              
                                            exit();
                                            header('Location:index.php');
                                            }
                                            
                                            $rsa->gen_key($p, $q);
                                            ?>
                                              <?php
                                              if ( isset($_POST['decrypt']) ) {
                                                $decrypted = $rsa->decrypt($text, $rsa->get_d(), $rsa->get_n());
                                                $text_arr = preg_split('/[^a-zA-Z0-9]/', $text);
                                            ?>

                                                <div class="form-floating ">
                                                    <div class="col-md-12 mt-2">
                                                    <form action="/detail"  method="GET">
                                                            @csrf
                                                            <input type="text" name="No_Sertifikat"  id="No_Sertifikat" style="border: none; width: 385px"  value="<?= $decrypted ?>">
                                                        <button class="btn btn-primary w-100 mt-2" type="submit">Detail Data !</button>
                                                </form>
                                                    
                                                    </div>
                                                </div>
                                            <?php
                                              }
                                            }
                                            ?>

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
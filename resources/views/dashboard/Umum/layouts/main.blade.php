<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pusat Sains Sertifikat </title>
    
    <!-- Custom fonts for this template-->
    <link href={{ asset('style/vendor/fontawesome-free/css/all.min.css') }} rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Custom styles for this template-->
    <link href={{ asset('style/css/sb-admin-2.min.css') }} rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <style>
        .footer {
          position: fixed;
          left: 0;
          bottom: 0;
          height: 5%;
          width: 100%;
          background-color: white;
          color:brgb(129, 129, 129)
          text-align: center;
        }
        </style>
</head>

<body id="page-top">
<div 
    <!-- Page Wrapper -->
    <div >



        <!-- Content Wrapper -->
        <div >

            <!-- Main Content -->
            <div id="content">

              @include('dashboard.Umum.layouts.topbar')
                 @yield('container')

            </div>
        </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <div class="footer" >
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Pusat Sains Indonesia Website 2022</span>
                    </div>
                </div>
            </div>
            <!-- End of Footer -->
 
        </div>
        <!-- End of Content Wrapper -->
 
    <!-- End of Page Wrapper -->

   </body>


    <!-- Bootstrap core JavaScript-->
    <script src={{ asset('style/vendor/jquery/jquery.min.js') }}></script>
    <script src={{ asset('style/vendor/bootstrap/js/bootstrap.bundle.min.js') }}></script>

    <!-- Core plugin JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
   
    <script src={{ asset('style/vendor/jquery-easing/jquery.easing.min.js') }}></script>

    <!-- Custom scripts for all pages-->
    <script src={{ asset('style/js/sb-admin-2.min.js') }}></script>

    <!-- Page level plugins -->
    <script src={{ asset('style/vendor/chart.js/Chart.min.js') }}></script>

    <!-- Page level custom scripts -->
    <script src={{ asset('style/js/demo/chart-area-demo.js') }}></script>
    <script src={{ asset('style/js/demo/chart-pie-demo.js') }}></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

    <script>
      
            
       
            function onScanSuccess(decodedText, decodedResult) {
                // handle the scanned code as you like, for example:
                        
                    $('#No_Sertifikat').val(decodedText);
                    
                    let id = decodedText
                    html5QrcodeScanner.clear(1)
                    csrf_token = $('meta[name="csrf_token"]').attr('content');
                   
                    Swal.fire({
                        title : 'Succes',
                        text : 'Berhasil Terscan',
                   
                        confirmButtonColor : '#3085d6',
                        cancelButtonColor :'#d33',
                        confirmButtonText : 'Ok'
                    }).then((result)=>{
                        
                        if(result.value){
                            $.ajax({
                                url : "{{ route('validasi') }}",
                                type :'POST',
                                data : {
                                    '_method' : 'POST',
                                    '_token'  : "{{ csrf_token() }}",
                                    'Kode_Enkripsi' : id
                                     
                                },
                                success: function(response){
                                
                                if(response.status_error){
                                    Swal.fire({
                                        type: 'error',
                                        title: 'Oops...',
                                        text:  'Data Sertifikat Tidak Terverifikasi'
                                       
                                })
                                setTimeout(function() {
                                window.location.href = "/Scan";
                                 }, 3000); 
                                }
                                if(response.berhasil){
                                    Swal.fire({
                                        icon: 'success',
                                        type: 'success',
                                        title: 'Success!',
                                        text: 'Data Sertifikat Terverifikasi!'
                                        
                                    });

                                }
                                   
                                },
                               
                                })
                            }
                        })
                    
                }

                function onScanFailure(error) {
                // handle scan failure, usually better to ignore and keep scanning.
                // for example:
                console.warn(`Code scan error = ${error}`);
                }

                let html5QrcodeScanner = new Html5QrcodeScanner(
                "reader",
                { fps: 90, qrbox: {width: 500, height: 500} },
                /* verbose= */ false);
                html5QrcodeScanner.render(onScanSuccess, onScanFailure);
    </script>
      
            
            </body>
</html>
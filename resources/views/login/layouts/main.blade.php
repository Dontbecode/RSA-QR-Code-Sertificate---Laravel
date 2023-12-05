<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Pusat Sains Sertifikat - Login</title>
    
    <!-- Custom styles for this template-->
    <link href="/style/css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        .imgbg {
        vertical-align: middle;
        border-style: none; 
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        }
    </style>

  </head>s
 
	<body class="imgbg" style="background-image: url(/style/img/bgLogin.jpg);">
        <script>
            window.setTimeout(function() {
              $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove(); 
              });
            }, 2000);
          </script>
        <div class="container">

            <!-- Outer Row -->
            <div class="row justify-content-center">
    
                <div class="col-xl-10 col-lg-12 col-md-9">
    
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                       
                                        @if(session()->has('loginError'))
                                        <div  class="alert alert-danger" role="alert">
                                          {{ session('loginError') }}
                                        
                                        </div>
                                        @endif
                                      
                                        <div class="text-center">
                                            <img src="/style/img/Logo.png" height="200" width="200" alt="">
                                            <h1 class="h4 text-gray-900 mb-4">Selamat Datang Admin!</h1>
                                        </div>
                                        <form action="/Masuk"  method="post">
                                            @csrf

                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control form-control-user"
                                                    id="exampleInputEmail" aria-describedby="emailHelp"
                                                    placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password" class="form-control form-control-user"
                                                    id="exampleInputPassword" placeholder="Password">
                                            </div>
                                           
                                            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Masuk</button>
                                        
                                        </form>
                                        
                                      
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
      
     
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      
	</body>
</html>


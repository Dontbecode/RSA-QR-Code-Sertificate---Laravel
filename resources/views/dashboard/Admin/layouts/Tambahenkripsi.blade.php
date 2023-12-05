@extends('dashboard.Admin.layouts.main')

@section('container')

<div>
<?php 
    require_once 'Rsa.php';
  $rsa = new Rsa();
?>


<!doctype html>
<html lang="id">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Algoritma RSA Sederhana Menggunakan PHP</title>
  
  </head>
  <body>

    <div class="container-md">

      <header>
        <div class="row mt-5">
          <div class="col-12 text-center">
            <h1>Algoritma RSA Sederhana Menggunakan PHP</h1>
          </div>
        </div>
      </header>

      <div class="row my-5">
        <div class="col-12-md">
          <div class="card">

            <div class="card-header">
              <h3>Masukkan Nilai p, Nilai q, dan Teks</h3>
            </div>
            
            <div class="card-body">
              <div class="card-text">
              
                <form action="/dashboard/Admin/layouts/Tambahenkripsi" method="POST">
                    @csrf
                  <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="pValue" aria-describedby="pValueHelp" name="p_value" value="11" hidden>
                
                
                  </div>

                  <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="qValue" aria-describedby="qValueHelp" name="q_value" value="17"hidden>
                
              
                  </div>

                  <div class="form-floating mb-3">
                    <textarea class="form-control" id="textValue" rows="3" aria-describedby="textHelp" name="text_isi" placeholder="Teks" style="height: 100px"><?= isset($_POST['text_isi']) ? $_POST['text_isi'] : ''; ?></textarea>
                    <label for="textValue" class="">Teks</label>
                    <div id="textHelp" class="form-text">Ketik teks yang ingin di enkripsi. Atau chipertext yang ingin di dekripsi. Contoh chipertext: 72,89,45,60</div>
                  </div>
                  
                  <input type="submit" name="encrypt" class="btn btn-primary" value="Enkripsi">

                  <input type="submit" name="decrypt" class="btn btn-primary" value="Dekripsi">

                </form>

              </div>
            </div>

          </div>
        </div>
      </div>
        
      <?php
        if ( ( isset($_POST['encrypt']) || isset($_POST['decrypt']) ) && isset($_POST['p_value']) && isset($_POST['q_value']) && isset($_POST['text_isi']) ) {
          $p = $_POST['p_value'];
          $q = $_POST['q_value'];
          $text = $_POST['text_isi'];
          
          if ( isset($_POST['decrypt']) && preg_match("/[a-zA-Z]/", $text) ) {
              
              exit();
              header('Location:index.php');
          }
          
          
          
          $rsa->gen_key($p, $q);

      ?>
                
        <div class="row">
          <div class="col-12-md">
            <div class="card">
              
              <div class="card-header">
                <h1>Hasil </h1>
              </div>
              
             
                
                <?php
                  if ( isset($_POST['encrypt']) ) {
                    $encrypted = $rsa->encrypt($text, $rsa->get_e(), $rsa->get_n());
                    $encrypted_arr = preg_split('/[^a-zA-Z0-9]/', $encrypted);
                  
                ?>
                  <div class="mb-3 row">
                      <div class="col-sm-12">
                          
               
                      <label for="chipertextResultValue" class="form-label">Chiperteks:</label>
                      <div class="position-relative">
                        <form action="/SimpanEnkripsi"  method="post">
                            @csrf
                        <input  class="form-control text-result" id="chipertextResultValue" aria-describedby="chipertextResultHelp" name="text_value" placeholder="Teks" style="height: 120px" value="<?= $encrypted?>" readonly>
                        <button class="btn btn-primary w-100" type="submit">Simpan</button>
                    </form>
                      </div>
                    </div>
                

                  </div>
                <?php
                  }
                ?>

                <?php
                  if ( isset($_POST['decrypt']) ) {
                    $decrypted = $rsa->decrypt($text, $rsa->get_d(), $rsa->get_n());
                    $text_arr = preg_split('/[^a-zA-Z0-9]/', $text);
                ?>
                 
                  <div class="mb-3 row">
                    <div class="col-sm-12">
                      <label for="plaintextResultValue" class="form-label">Plainteks:</label> 
                      <div class="position-relative">
                        <button class="btn btn-primary btn-sm position-absolute top-0 end-0 m-2 copy-btn" data-bs-toggle="tooltip" data-bs-placement="left" title="Berhasil Disalin">Salin</button>
                        <textarea disabled class="form-control text-result" id="plaintextResultValue" aria-describedby="plaintextResultHelp" name="plaintextResult_value" placeholder="Teks" style="height: 120px"><?= $decrypted ?></textarea>
                      </div>
                    </div>
                  </div>
                <?php
                  }
                ?>
              </div>

            </div>
          </div>
        
        <?php 
          }
        ?>
      </div>

    </div>


 
    

  </body>
</html>
          

          
@endsection
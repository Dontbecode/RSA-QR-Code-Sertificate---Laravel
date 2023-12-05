@extends('dashboard.Admin.layouts.main')

@section('container')
<?php 
    require_once 'Rsa.php';
  $rsa = new Rsa();
?>
<style>

  
  .info {
    background-color: #e7f3fe;
    border-left: 6px solid #2196F3;
  }
  
  
  .warning {
    background-color: #ffffcc;
    border-left: 6px solid #ffeb3b;
  }
  </style>
<div class="text-center mb-4">
    <h2 >Lengkapi Data Peserta Pelatihan</h2>
  </div>
  <center>
   
          <div class="card" style="width: 70%;" style="float: left;">
            <div class="card-body">
              <div class="info">
                <h5><strong>Info!</strong> Panduan untuk melengkapi data absensi dan nilai</h5><br>
              <p style="text-align: left;"> 
                1. Pilih data peserta pelatihan yang mau dilengkapi data nya<br>
                2. Isi Kehadiran <br>
                3. Isi tanggal pelaksanaan pelatihan<br>
                4. Masukan Nilai<br>
                5. Setiap data dilengkapi atau di update wajib menekan tombol Generate No Sertifikat<br>
                6. Setelah semuanya di isi dengan benar , terakhir menekan tombol Enkripsi dan Simpan Enkripsi<br></p>

              </div>
            </div>
          </div>
      
          <div class="card" style="width: 70%;" style="float: right;">
            <div class="card-body">
              <div class="warning" >
                <h5><strong>Info!</strong> Grade Penilaian Peserta</h5><br>
              <p style="text-align: left;"> 
                1. A  = 91 - 100 <br>
                2. AB = 81 - 90  <br>
                3. B  = 71 - 80  <br>
                4. BC = 61 - 70  <br>
                3. C  = 51 - 60  <br>
                4. CD = 10 - 50  <br>
                5. D  = 0
            </p>

              </div>
            </div>
          </div>
    
  
  </center>
<div class="col-lg-12 m-2">
    <form action="/dashboard/Admin/layouts/DataNilaidanAbsensi/Lengkapidata/Edit/{{ $dtpeserta->id }}" method="post">
      <div class="row">
        <div class="col-sm">
      @csrf
          <div class="form-floating ">
            <div class="col-md-12 mt-2">
              <input type="hidden" name="No" id="No" class="form-control rounded-top"  required value="No.">
            </div>
          </div>
          
          <div class="form-floating ">
            <div class="col-md-12 mt-2">
          
              <input type="text" name="id" class="form-control rounded-top @error('id')is-invalid @enderror" id="id"   required value="{{$dtpeserta->id}}" hidden>
              @error('id')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="form-floating ">
            <div class="col-md-12 mt-2">
              <label for="No_peserta">No Peserta</label>
              <input type="text" name="No_peserta" class="form-control rounded-top @error('No_peserta')is-invalid @enderror" id="No_peserta"   required value="{{$dtpeserta->No_peserta}}" readonly>
              @error('No_peserta')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="form-floating ">
            <div class="col-md-12 mt-2">
              <input type="hidden" name="SP"  id="SP" required value="PUSATSAINS" readonly>
            </div>
          </div>

          <div class="form-floating ">
            <div class="col-md-12 mt-2">
              <label for="Nama_peserta">No Peserta</label>
              <input type="text" name="Nama_peserta" class="form-control rounded-top" id="Nama_peserta"   required value="{{$dtpeserta->Nama_peserta}}" readonly>
            </div>
          </div>

          <div class="form-floating ">
            <div class="col-md-12 mt-2">
              <label for="NPelatihan">Nama Pelatihan</label>
              <input type="text" name="NPelatihan" class="form-control rounded-top" id="NPelatihan"   required value="{{$dtpeserta->NPelatihan}}" readonly>
            </div>
          </div>

        </div>
        <div class="col-sm">
          
            <div class="form-floating ">
              <div class="col-md-12 mt-2">
                <label for="kehadiran">Status</label>
                <select  name="kehadiran" class="form-control custom-select @error('kehadiran')is-invalid @enderror" onchange="return Thadir();" id="kehadiran" value="{{$dtpeserta->kehadiran}}" placeholder="Masukan kehadiran" required ">
                  <option selected>{{$dtpeserta->kehadiran}}</option>
                  <option value="Valid">Valid</option>
                  <option value="Tidak Valid">Tidak Valid</option>
                </select>
                @error('kehadiran')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>



          <div class="form-floating ">
            <div class="col-md-12 mt-2">
              <label for="tanggal">Tanggal</label>
              <input type="date" name="tanggal" class="form-control rounded-top @error('tanggal')is-invalid @enderror" id="tanggal"  placeholder="Masukan tanggal" value="{{$dtpeserta->tanggal}}"  required value="{{ old('tanggal') }}">
              @error('tanggal')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
         

          <div class="form-floating ">
            <div class="col-md-12 mt-2">
              <label for="Nilai">Status</label>
              
              <?php

              if("$dtpeserta->kehadiran" == "Valid"){ ?>

                    {{-- <input type="text" name="Nilai" class="form-control rounded-top @error('Nilai')is-invalid @enderror" id="Nilai"  value="{{$dtpeserta->Nilai}}" placeholder="Masukan Nilai" required> --}}

                    <select  name="Nilai" class="form-control custom-select @error('Nilai')is-invalid @enderror" id="Nilai"  placeholder="Masukan Nilai" required ">
                      <option value="">{{ $dtpeserta->Nilai }}</option>
                      <option value="A">A</option>
                      <option value="AB">AB</option>
                      <option value="B">B</option>
                      <option value="BC">BC</option>
                      <option value="C">C</option>
                      <option value="CD">CD</option>
                      <option value="D">D</option>
                    </select>
                <?php
              }else if("$dtpeserta->kehadiran" == "Tidak Valid"){
              ?>
                    {{-- <input type="text" name="Nilai" class="form-control rounded-top @error('Nilai')is-invalid @enderror" id="Nilai"  value="{{$dtpeserta->Nilai}}"  readonly placeholder="Masukan Nilai" required> --}}

                    <select  name="Nilai" class="form-control custom-select @error('Nilai')is-invalid @enderror" id="Nilai"  placeholder="Masukan Nilai" readonly required ">
                      <option value="">{{ $dtpeserta->Nilai }}</option>
                      <option value="A">A</option>
                      <option value="AB">AB</option>
                      <option value="B">B</option>
                      <option value="BC">BC</option>
                      <option value="C">C</option>
                      <option value="CD">CD</option>
                      <option value="D">D</option>
                    </select>
              <?php
              }else{
                ?>
                 {{-- <input type="text" name="Nilai" class="form-control rounded-top @error('Nilai')is-invalid @enderror" id="Nilai"  value="{{$dtpeserta->Nilai}}" placeholder="Masukan Nilai" required> --}}
                 <select  name="Nilai" class="form-control custom-select @error('Nilai')is-invalid @enderror" id="Nilai"  placeholder="Masukan Nilai" readonly required ">
                  <option value="">{{ $dtpeserta->Nilai }}</option>
                  <option value="A">A</option>
                  <option value="AB">AB</option>
                  <option value="B">B</option>
                  <option value="BC">BC</option>
                  <option value="C">C</option>
                  <option value="CD">CD</option>
                  <option value="D">D</option>
                </select>
                <?php

              }
              ?>
              
              @error('Nilai')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror

            </div>
          </div>

        </div>
        <div class="col-sm">



          

          <div class="form-floating ">
            <div class="col-md-12 mt-2">
              <label for="No_Sertifikat">No Sertifikat</label>

              <input class="form-control" id="No_Sertifikat" rows="3" aria-describedby="textHelp" name="No_Sertifikat"  value="{{$dtpeserta->No_Sertifikat}}" readonly required>
              @error('No_Sertifikat')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          

          
          <div class="form-floating ">
          <div class="col-md-12 mt-2">
            <div class=" mb-2 ">
              <button type="submit" name="Generate" class="btn btn-primary w-100" onclick="myFunction()"  >Generete No Sertifikat</button>
            </div>
           
           
           
          
            <div>
            {{-- <button class="btn btn-primary w-100 mt-2"  type="submit">Tambah Data</button> --}}
          </div>
          
             </div>
           </div>
          </form>

          <div class="form-floating ">
          <div class="col-md-12 mt-2">
           <form action="/dashboard/Admin/layouts/DataNilaidanAbsensi/Lengkapidata/Edit/{{ $dtpeserta->id }}" method="POST">
            @csrf
            
          <div class="form-floating mb-3">
            <input type="number" class="form-control" id="pValue" aria-describedby="pValueHelp" name="p_value" value="11" hidden>
        
        
          </div>
      
          <div class="form-floating mb-3">
            <input type="number" class="form-control" id="qValue" aria-describedby="qValueHelp" name="q_value" value="17"hidden>
          </div>
          
          <textarea class="form-control" id="No_Sertifikat" rows="3" aria-describedby="textHelp" name="No_Sertifikat" placeholder="Teks" style="height: 100px" value="{{$dtpeserta->No_Sertifikat}}" hidden><?= isset($_POST['No_Sertifikat']) ? $_POST['No_Sertifikat'] : ''; ?></textarea>
          <div class=" mb-2 ">
            <input type="submit" name="encrypt" class="btn btn-primary w-100 mt-2" value="Enkripsi">
          </div>
      
        </form>
      
          <?php
                  
                if ( ( isset($_POST['encrypt'])  ) && isset($_POST['p_value']) && isset($_POST['q_value']) && isset($_POST['No_Sertifikat'])  ) {
                $p = $_POST['p_value'];
                $q = $_POST['q_value'];
                $text = $_POST['No_Sertifikat'];
      
                $rsa->gen_key($p, $q);
      
                if ( isset($_POST['encrypt']) ) {
                          $encrypted = $rsa->encrypt($text, $rsa->get_e(), $rsa->get_n());
                          $encrypted_arr = preg_split('/[^a-zA-Z0-9]/', $encrypted);
      
              ?>
              <div class="form-floating ">
                <div class="col-md-12 mt-2">
                  <form action="/dashboard/Admin/layouts/DataNilaidanAbsensi/Lengkapidata/Editenkrip/{{ $dtpeserta->id }}"  method="post">
                        @csrf
                        <input type="text" name="id" class="form-control rounded-top @error('id')is-invalid @enderror" id="id"   required value="{{$dtpeserta->id}}" hidden>
                        <input type="text" name="No_peserta" class="form-control rounded-top @error('No_peserta')is-invalid @enderror" id="No_peserta"   required value="{{$dtpeserta->No_peserta}}" hidden>
                        <input class="form-control" id="No_Sertifikat" rows="3" aria-describedby="textHelp" name="No_Sertifikat"  value="{{$dtpeserta->No_Sertifikat}}" required hidden>
                        <input class="form-control" id="Nama_peserta" rows="3" aria-describedby="textHelp" name="Nama_peserta"  value="{{$dtpeserta->Nama_peserta}}" required hidden>
                        <input type="text" name="NPelatihan" class="form-control rounded-top" id="NPelatihan"    value="{{$dtpeserta->NPelatihan}}" readonly hidden>
                        <input type="text" name="J_kelamin" class="form-control rounded-top" id="J_kelamin"    value="{{$dtpeserta->J_kelamin}}" readonly hidden>
                        <input type="text" name="No_tlpn" class="form-control rounded-top" id="No_tlpn"    value="{{$dtpeserta->No_tlpn}}" readonly hidden>
                        <input type="text" name="email" class="form-control rounded-top" id="email"    value="{{$dtpeserta->email}}" readonly hidden>
                        <input type="text" name="alamat" class="form-control rounded-top" id="alamat"    value="{{$dtpeserta->alamat}}" readonly hidden>
                        <input type="text" name="kehadiran" class="form-control rounded-top" id="kehadiran"    value="{{$dtpeserta->kehadiran}}" readonly hidden >
                        <input type="text" name="Nilai" class="form-control rounded-top" id="Nilai"    value="{{$dtpeserta->Nilai}}" readonly hidden >
                        <input type="text" name="tanggal" class="form-control rounded-top" id="tanggal"    value="{{$dtpeserta->tanggal}}" readonly hidden>
                    <input  class="form-control text-result" id="chipertextResultValue" aria-describedby="chipertextResultHelp" name="Kode_Enkripsi" placeholder="Teks" style="height: 120px" value="<?= $encrypted?>" readonly>
                    <button class="btn btn-primary w-100" type="submit">Simpan Data Enkripsi</button>
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
    
   
  
    
      
    








    
     @endsection
				<script type="text/javascript">
			
         function Thadir(){
          var kehadiran = $("#kehadiran").val();
          

          
           if (kehadiran == 'Tidak Valid') {
             
            document.getElementById("Nilai").readOnly = true;
          	$('#Nilai').val("D");
            
				}else {
            $('#Nilai').val("");
            document.getElementById("Nilai").readOnly = false;
        }
      }

      function myFunction(){
					var No = $("#No").val();
					var No_peserta = $("#No_peserta").val();
					var sP = $("#SP").val();
					var NPelatihan = $("#NPelatihan").val();
					var kehadiran = $("#kehadiran").val();
					var tanggal = $("#tanggal").val();
				
			


					$('#No_Sertifikat').val(No +No_peserta+"/"+ sP +"/"+ NPelatihan +"/"+tanggal);
        }

				</script>

@extends('dashboard.Admin.layouts.main')

@section('container')


<div class="text-center mb-4">
    <h2 >Tambah Tamplate Sertifikat</h2>
  </div>
<div class="col-lg-8">
    <form action="/dashboard/Admin/layouts/Tamplatesertifikat/Tambahtamplate" method="post" enctype="multipart/form-data">
      @csrf
        <div class="cf-cover">

          <div class="form-floating mb-2">
            <div class="col-md-12">
              <label for="NTamplate">Nama Tamplate</label>
              <input type="text" name="NTamplate" class="form-control rounded-top @error('NTamplate')is-invalid @enderror" id="NTamplate"  placeholder="Masukan Nama Tamplate" required value="{{ old('NTamplate') }}">
              @error('NTamplate')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="form-floating mb-2">
            <div class="col-md-12">
              <label for="Tamplate">Tamplate</label>
              <input type="file" name="Tamplate" class="form-control  @error('Tamplate')is-invalid @enderror" id="Tamplate" onchange="previewImage()"  required >
              @error('Tamplate')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="form-floating mb-2">
            <div class="col-md-12">
              <img class="img-preview rounded float-start" alt=""  width="250" height="150">
            </div>
          </div>

         <div class="form-row mt-4 row">
           <div class="col-md-12">
             <button class="btn btn-primary w-100" type="submit">Tambah Data</button>
           </div>
         </div>

       </div>
     </form>

    </div>

    <script>
      function previewImage(){
          const image = document.querySelector("#Tamplate");
          const imgPreview = document.querySelector('.img-preview');

          imgPreview.style.display = 'block';
          const oFReader = new FileReader();
          oFReader.readAsDataURL(image.files[0]);
          oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
          }
      }
      </script>
     @endsection
@extends('dashboard.Admin.layouts.main')

@section('container')

<div class="text-center mb-4">
    <h2 >Tambah Data Peserta Pelatihan</h2>
  </div>
<div class="col-lg-8">
    <form action="" method="post">
      @csrf
        <div class="cf-cover">


          <div class="form-floating mb-2">
            <div class="col-md-12">
              <label for="kehadiran">No Peserta</label>
              <input type="text" name="kehadiran" class="form-control rounded-top @error('kehadiran')is-invalid @enderror" id="kehadiran"  placeholder="Masukan kehadiran" required value="{{ old('kehadiran') }}">
              @error('kehadiran')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>



          <div class="form-floating mb-2">
            <div class="col-md-12">
              <label for="tanggal">Tanggal</label>
              <input type="date" name="tanggal" class="form-control rounded-top @error('tanggal')is-invalid @enderror" id="tanggal"  placeholder="Masukan tanggal" required value="{{ old('tanggal') }}">
              @error('tanggal')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="form-floating mb-2">
            <div class="col-md-12">
              <label for="Nilai">Nilai</label>
              <input type="text" name="Nilai" class="form-control rounded-top @error('Nilai')is-invalid @enderror" id="Nilai"  placeholder="Masukan Nilai" required>
              @error('Nilai')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
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
     @endsection
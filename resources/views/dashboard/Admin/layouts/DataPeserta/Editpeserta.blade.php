@extends('dashboard.Admin.layouts.main')

@section('container')




<div class="text-center mb-4">
    <h2 >Edit Data Peserta Pelatihan</h2>
  </div>
<div class="col-lg-8">
    <form action="/dashboard/Admin/layouts/DataPeserta/{{ $dtpeserta->id }}" method="post">
      @csrf
        <div class="cf-cover">


          <div class="form-floating mb-2">
            <div class="col-md-12">
              <label for="No_pesera">No Peserta</label>
              <input type="text" name="No_peserta" class="form-control rounded-top @error('No_peserta')is-invalid @enderror" id="No_peserta"  placeholder="Masukan Nama Lengkap" required value="{{$dtpeserta->No_peserta}}">
              @error('No_peserta')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>



          <div class="form-floating mb-2">
            <div class="col-md-12">
              <label for="Nama_peserta">Nama Lengkap</label>
              <input type="text" name="Nama_peserta" class="form-control rounded-top @error('Nama_peserta')is-invalid @enderror" id="Nama_peserta"  placeholder="Masukan Nama Lengkap" required value="{{ $dtpeserta->Nama_peserta }}">
              @error('Nama_peserta')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="form-floating mb-2">
            <div class="col-md-12">
              <label for="J_kelamin">Pilih Jenis Kelamin</label>
              <select  name="J_kelamin" class="form-control custom-select @error('J_kelamin')is-invalid @enderror" id="J_kelamin"  placeholder="Masukan Jenis Kelamin" required ">
                <option selected>{{ $dtpeserta->J_kelamin }}</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
                {{-- <option value="">Select Country</option>
                @foreach($countries as $country)
                  <option value="{{ $country->id }}" @if($country->id == $user->country) selected @endif>{{ $country->name }}</option>
                @endforeach
               --}}
              </select>
              @error('J_kelamin')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>


         
         <div class="form-floating mb-2">
          <div class="col-md-12">
            <label for="No_tlpn">No Telepon</label>
            <input type="text" name="No_tlpn" class="form-control rounded-top @error('No_tlpn')is-invalid @enderror" id="No_tlpn" placeholder="No Telepon" required value="{{$dtpeserta->No_tlpn}}">
            @error('No_tlpn')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
        </div>
    
          <div class="form-floating mb-2">
            <div class="col-md-12">
              <label for="email">Alamat Email</label>
              <input type="email" name="email" class="form-control rounded-top @error('email')is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{$dtpeserta->email}}">
              @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="form-floating mb-2">
            <div class="col-md-12">
              <label for="alamat">Alamat Lengkap</label>
              <input type="text" name="alamat" class="form-control rounded-top @error('alamat')is-invalid @enderror" id="alamat"  placeholder="Masukan Alamat Lengkap" required value="{{$dtpeserta->alamat}}">
              @error('alamat')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="form-floating mb-2">
            <div class="col-md-12">
              <label for="NPelatihan">Pilih Jenis Pelatihan</label>
              <select  name="NPelatihan" class="form-control custom-select @error('NPelatihan')is-invalid @enderror" id="NPelatihan"  placeholder="Masukan Jenis Pelatihan" required ">
                <option selected>{{ $dtpeserta->NPelatihan }}</option>
                @foreach ($dtpelatihan as $pelatihan)
                  <option value="{{ $pelatihan->NPelatihan }}" >{{ $pelatihan->NPelatihan }}</option>
                @endforeach
                
                {{-- <option value="">Select Country</option>
                @foreach($countries as $country)
                  <option value="{{ $country->id }}" @if($country->id == $user->country) selected @endif>{{ $country->name }}</option>
                @endforeach
               --}}
              </select>
              @error('NPelatihan')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

                    <!-- Edit Modal-->
          <div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Yakin data akan di Edit ?</h5>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                      </button>
                  </div>
                  <div class="modal-body">Data yang sebelumnya akan berubah, menjadi data baru yang telah di edit</div>
                  <div class="modal-footer">
                      <a class="btn btn-primary" href="/Gagal">Tidak</a>
                      <button class="btn btn-primary" type="submit">Ya</button>
                  </div>
              </div>
          </div>
          </div>
         <div class="form-row mt-4 row">
           <div class="col-md-12">
             <a class="dropdown-item" href="#" data-toggle="modal" data-target="#EditModal">
              <button class="btn btn-primary w-100" >Ubah Data</button>
            </a>
           </div>
         </div>

       </div>
     </form>

    </div>

     @endsection
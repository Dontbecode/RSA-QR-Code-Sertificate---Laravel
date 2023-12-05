@extends('dashboard.Admin.layouts.main')

@section('container')

<div class="text-center mb-4">
    <h2 >Edit Data Jenis Pelatihan</h2>
  </div>
<div class="col-lg-8">
    <form action="/dashboard/Admin/layouts/DataJenisPelatihan/{{ $dtpelatihan->id }}" method="post">
      @csrf
        <div class="cf-cover">

          <div class="form-floating mb-2">
            <div class="col-md-12">
              <label for="KPelatihan">Kode Pelatihan</label>
              <input type="text" name="KPelatihan" class="form-control rounded-top @error('KPelatihan')is-invalid @enderror" id="KPelatihan"  placeholder="Masukan Kode Pelatihan" required value="{{$dtpelatihan->KPelatihan}}">
              @error('KPelatihan')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="form-floating mb-2">
            <div class="col-md-12">
              <label for="NPelatihan">Nama Pelatihan</label>
              <input type="text" name="NPelatihan" class="form-control rounded-top @error('NPelatihan')is-invalid @enderror" id="NPelatihan"  placeholder="Masukan Nama Pelatihan" required value="{{$dtpelatihan->NPelatihan}}">
              @error('NPelatihan')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
         
         <div class="form-floating mb-2">
          <div class="col-md-12">
            <label for="DPelatihan">Durasi Pelatihan</label>
            <input type="nint" name="DPelatihan" class="form-control rounded-top @error('DPelatihan')is-invalid @enderror" id="DPelatihan" placeholder="Masukan Durasi Pelatihan" required value="{{$dtpelatihan->DPelatihan}}">
            @error('DPelatihan')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
        </div>

         <div class="form-row mt-4 row">
           <div class="col-md-12">
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#EditModal">
             <button class="btn btn-primary w-100" type="submit">Ubah Data</button>
            </a>
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
                  <div class="modal-body">Data yang sebelumnya akan berubah, menjadi data baru yang telah di edit.</div>
                  <div class="modal-footer">
                      <a class="btn btn-primary" href="/Gagal/Jp">Tidak</a>
                      <button class="btn btn-primary" type="submit">Ya</button>
                  </div>
              </div>
          </div>
          </div>
       </div>
     </form>

    </div>
     @endsection
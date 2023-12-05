
@extends('dashboard.Admin.layouts.main')

@section('container')

<div class="container">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Generate Sertifikat</h1>
  </div>
  
  <div class="row">
    @foreach ($dttamplate as $tamplate)
    <div class="col-md-3 mt-3">
        <div class="card ">
          <img src="{{ asset('uploadtamplate/'.$tamplate->Tamplate) }}" class="card-img-top" width="250" height="150" >
          <div class="card-body">
            <h5 class="card-title">{{ $tamplate->NTamplate }}</h5>
          </div>
        </div>    
    </div>
    @endforeach
    
  </div>

  {{ $dttamplate->links() }}

<form action="/dashboard/Admin/layouts/Sertifikat" method="post" class="mt-4">
  @csrf
  
  <div class="row">
    <div class="col">
          <label for="Tamplate">Pilih Jenis Pelatihan</label>
          <select  name="Tamplate" class="form-control custom-select @error('Tamplate')is-invalid @enderror  " id="Tamplate"   required ">
            <option value="">Pilih Tamplate</option>
            @foreach ($dttamplate as $tamplate)
              <option value="{{ $tamplate->Tamplate }}">{{ $tamplate->Tamplate }}</option>
            @endforeach
          </select>
    </div>

    
        <input type="text" name="No_Sertifikat" class="form-control rounded-top " id="No_Sertifikat"   value="{{$dtpeserta->No_Sertifikat}}">
        <input type="text" name="Nama_peserta" class="form-control rounded-top " id="Nama_peserta"   value="{{$dtpeserta->Nama_peserta}}">
        <input type="text" name="NPelatihan" class="form-control rounded-top " id="NPelatihan"   value="{{$dtpeserta->NPelatihan}}">
        <input type="text" name="DPelatihan" class="form-control rounded-top " id="DPelatihan"   value="{{$dtpeserta->DPelatihan}}">
        <input type="text" name="Kode_Enkripsi" class="form-control rounded-top " id="Kode_Enkripsi"   value="{{$dtpeserta->Kode_Enkripsi}}">
     
    <button class="btn btn-primary btn-sm "   type="submit" >Generate Sertifikat</button>

  </div>
 </form>
</div>

  @endsection

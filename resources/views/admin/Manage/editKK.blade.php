@extends('layouts.template')

@section('content')
        <div class="row">
    <div class="card">
    <div class="card-body">
      <h4 class="card-title">Default form</h4>
      <p class="card-description"> Basic form layout </p>
      <form class="forms-sample" action="{{route('updatekk', $kartukeluarga->nik_kk)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="nik_kk">NIK</label>
          <input type="number" class="form-control" name="nik_kk" id="nik_kk" placeholder="Judul" value="{{ old('nik_kk', $kartukeluarga->nik_kk) }}" readonly>
        </div>
        <div class="form-group">
          <label for="nama_kepala">Nama Kepala Keluarga</label>
          <input type="text" class="form-control" name="nama_kepala" id="nama_kepala" placeholder="Nama Kepala Keluarga" value="{{ old('nama_kepala', $kartukeluarga->nama_kepala) }}">
        </div>
        <<div class="form-group">
          <label for="alamat_kk">Alamat Kartu Keluarga</label>
          <input type="text" class="form-control" name="alamat_kk" id="alamat_kk" placeholder="Alamat" value="{{ old('alamat_kk', $kartukeluarga->alamat_kk) }}">
        </div>
        <button type="submit" class="btn btn-primary me-2">Update</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
  @endsection

  

@extends('admin.layouts.template')

@section('content')
        <div class="row">
    <div class="card">
    <div class="card-body">
      <h4 class="card-title">Default form</h4>
      <p class="card-description"> Basic form layout </p>
      <form class="forms-sample" action="{{route('storekk')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="nik_kk">NIK</label>
          <input type="number" class="form-control" name="nik_kk" id="nik_kk" placeholder="Judul">
        </div>
        <div class="form-group">
          <label for="nama_kepala">Nama Kepala Keluarga</label>
          <input type="text" class="form-control" name="nama_kepala" id="nama_kepala" placeholder="Teks">
        </div>
        <<div class="form-group">
          <label for="alamat_kk">Alamat Kartu Keluarga</label>
          <input type="text" class="form-control" name="alamat_kk" id="alamat_kk" placeholder="Teks">
        </div>
        <button type="submit" class="btn btn-primary me-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
  @endsection

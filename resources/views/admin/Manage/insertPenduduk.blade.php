@extends('admin.layouts.template')

@section('content')
        <div class="row">
    <div class="card">
    <div class="card-body">
      <h4 class="card-title">Default form</h4>
      <p class="card-description"> Basic form layout </p>
      <form class="forms-sample" action="{{route('storependuduk')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="nik">NIK</label>
          <input type="number" class="form-control" name="nik" id="nik" placeholder="Judul">
        </div>
        <div class="form-group">
          <label for="nama_lengkap">Nama Lengkap</label>
          <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Teks">
        </div>
        <div class="form-group">
          <label for="tanggal_lahir">Tanggal Lahir</label>
          <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Teks">
        </div>
        <div class="form-group">
                <label for="nik_kk">NIK - Nama Kepala</label>
                  <select class="form-control" name="nik_kk" id="nik_kk">
                      @foreach($kkList as $kk)
                          <option value="{{ $kk->nik_kk }}">{{ $kk->nik_kk }} - {{ $kk->nama_kepala }}</option>
                      @endforeach
                  </select>
              </div> 
        <button type="submit" class="btn btn-primary me-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
  @endsection

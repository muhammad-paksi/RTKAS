@extends('ketua.layouts.template')

@section('content')
        <div class="row">
    <div class="card">
    <div class="card-body">
      <h4 class="card-title">Default form</h4>
      <p class="card-description"> Basic form layout </p>
      <form class="forms-sample" action="{{route('ketua.update.iuran', $iuran->id_iuran)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="nama_iuran">Nama Iuran</label>
          <input type="text" class="form-control" name="nama_iuran" id="nama_iuran" placeholder="Judul" value="{{ old('nama_iuran', $iuran->nama_iuran) }}">
        </div>
        <div class="form-group">
          <label for="tanggal">Tanggal</label>
          <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal Iuran" value="{{ old('tanggal', $iuran->tanggal) }}">
        </div>
        <button type="submit" class="btn btn-primary me-2">Update</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
  @endsection

  

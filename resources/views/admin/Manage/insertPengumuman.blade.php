@extends('admin.layouts.template')

@section('content')
        <div class="row">
    <div class="card">
    <div class="card-body">
      <h4 class="card-title">Default form</h4>
      <p class="card-description"> Basic form layout </p>
      <form class="forms-sample" action="{{route('storepengumuman')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="judul_pengumuman">Judul Pengumuman</label>
          <input type="text" class="form-control" name="judul_pengumuman" id="judul_pengumuman" placeholder="Judul">
        </div>
        <div class="form-group">
          <label for="isi_pengumuman">Isi Pengumuman</label>
          <input type="text" class="form-control" name="isi_pengumuman" id="isi_pengumuman" placeholder="Teks">
        </div>
        <button type="submit" class="btn btn-primary me-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
  @endsection

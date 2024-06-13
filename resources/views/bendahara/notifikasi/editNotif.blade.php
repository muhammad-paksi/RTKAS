@extends('bendahara.layouts.template')

@section('content')
        <div class="row">
    <div class="card">
    <div class="card-body">
      <h4 class="card-title">Default form</h4>
      <p class="card-description"> Basic form layout </p>
      <form class="forms-sample" action="{{route('bendahara.notifikasi.update', $notif->id_notifikasi)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="judul">Judul Notifikasi</label>
          <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul" value="{{ old('judul', $notif->judul) }}" >
        </div>
        <div class="form-group">
          <label for="id_iuran">Nama Iuran</label>
          <select class="form-control" name="id_iuran" id="id_iuran">
            @foreach($iuran as $ir)
            <option value="{{$ir->id_iuran}}">{{$ir->nama_iuran}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="informasi">Informasi</label>
          <input type="text" class="form-control" name="informasi" id="informasi" placeholder="informasi" value="{{ old('informasi', $notif->informasi) }}">
        </div>
        <div class="form-group">
          <label for="Nominal">Nominal</label>
          <input type="number" class="form-control" name="nominal" id="nominal" placeholder="nominal" value="{{ old('nominal', $notif->nominal) }}">
        </div>
        <div class="form-group">
          <label for="tanggal">tanggal</label>
          <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="tanggal" value="{{ old('tanggal', $notif->tanggal) }}">
        </div>
        <button type="submit" class="btn btn-primary me-2">Update</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
  @endsection

  

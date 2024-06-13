@extends('admin.layouts.template')

@section('content')
        <div class="row">
    <div class="card">
    <div class="card-body">
      <h4 class="card-title">Default form</h4>
      <p class="card-description"> Basic form layout </p>
      <form class="forms-sample" action="{{route('storeNotifikasi')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="judul">Judul Notifikasi</label>
          <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul">
        </div>
        <div class="form-group">
          <label for="judul">Nama Iuran</label>
          <select class="form-control" name="id_iuran" id="id_iuran">
            @foreach($iuran as $ir)
            <option value="{{$ir->id_iuran}}">{{$ir->nama_iuran}}</option>
            @endforeach
          </select>          
        </div>
        <div class="form-group">
          <label for="informasi">Informasi</label>
          <input type="text" class="form-control" name="informasi" id="informasi" placeholder="Informasi">
        </div>
        <div class="form-group">
          <label for="nominal">Nominal</label>
          <input type="number" class="form-control" name="nominal" id="nominal" placeholder="Nominal">
        </div>
        <div class="form-group">
          <label for="tanggal">Tanggal</label>
          <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal">
        </div>
        <button type="submit" class="btn btn-primary me-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
  @endsection

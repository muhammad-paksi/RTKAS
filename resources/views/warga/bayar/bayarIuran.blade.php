@extends('warga.layouts.template')

@section('content')
<div class="container">
  <h1>Bayar Iuran</h1>
  <form action="{{ route('bayarIuran.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
          <label for="id_notifikasi">ID Notifikasi</label>
          <input type="text" class="form-control" id="id_notifikasi" name="id_notifikasi" value="{{ $id_notifikasi }}" readonly>
      </div>
      <div class="form-group">
          <label for="nik">NIK</label>
          <input type="text" class="form-control" id="nik" name="nik" value="{{ $nik }}" readonly>
      </div>
      <div class="form-group">
          <label for="nik_kk">NIK KK</label>
          <input type="text" class="form-control" id="nik_kk" name="nik_kk" value="{{ $nik_kk }}" readonly>
      </div>
      <div class="form-group">
          <label for="bukti">Bukti Pembayaran</label>
          <input type="file" class="form-control" id="bukti" name="bukti" required>
      </div>
      <div class="form-group">
          <label for="nominal">Nominal</label>
          <input type="number" class="form-control" id="nominal" name="nominal" value="{{$nominal}}" readonly>
      </div>
      <div class="form-group">
          <label for="tanggal_bayar">Tanggal Bayar</label>
          <input type="date" class="form-control" id="tanggal_bayar" name="tanggal_bayar" required>
      </div>
      <button type="submit" class="btn btn-primary">Bayar</button>
  </form>
</div>
@endsection
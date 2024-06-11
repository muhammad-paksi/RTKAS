@extends('warga.layouts.template')

@section('content')
<div class="container">
  <div id="">
    <h3>Step 2 Title</h3>
    <section>
      <h5 class="bd-wizard-step-title">Step 2</h5>
      <h2 class="section-heading">Form Pembayaran</h2>
    <form action="{{ route('bayarIuran.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
        <label for="nik">NIK</label>
        <input type="text" class="form-control" id="nik" name="nik" value="{{ $nik }}" readonly>
    </div>
    <div class="form-group">
        <label for="id_notifikasi">ID Notifikasi</label>
        <input type="text" class="form-control" id="id_notifikasi" name="id_notifikasi" value="{{ $id_notifikasi }}" readonly>
    </div>
    <div class="form-group">
        <label for="bukti">Bukti Pembayaran</label>
        <input type="file" class="form-control" id="bukti" name="bukti" required>
    </div>
    <div class="form-group">
        <label for="nominal">Nominal</label>
        <input type="number" class="form-control" id="nominal" name="nominal" required>
    </div>
    <div class="form-group">
        <label for="nik_kk">NIK KK</label>
        <input type="text" class="form-control" id="nik_kk" name="nik_kk" value="{{ $nik_kk }}" readonly>
    </div>
    <div class="form-group">
        <label for="tanggal_bayar">Tanggal Bayar</label>
        <input type="date" class="form-control" id="tanggal_bayar" name="tanggal_bayar" required>
    </div>
    </section>
    <h3>Step 3 Title</h3>
    <section>
        <h5 class="bd-wizard-step-title">Step 3</h5>
        <h2 class="section-heading mb-5">Review your Details and Submit</h2>
        <h6 class="font-weight-bold">Select business type</h6>
        <p class="mb-4" id="business-type">Branding</p>
        <h6 class="font-weight-bold">Enter your Account Details</h6>
        <p class="mb-4"><span id="enteredFirstName">Cha</span> <span id="enteredLastName">Ji-Hun C</span> <br>
            Phone: <span id="enteredPhoneNumber">+230-582-6609</span> <br>
            Email: <span id="enteredEmailAddress">willms_abby@gmail.com</span></p>
        <button type="submit" class="btn btn-primary">Bayar</button>
        </form>
    </section>
  </div>
</div>
@endsection
@extends('warga.layouts.template')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Layanan</h1>

    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <h3 class="card-title">Bayar Kas</h3>
                    <p class="card-text">Layanan untuk membayar iuran kas warga secara online. Mudah, cepat, dan aman.</p>
                    <a href="{{ route('warga/iuran') }}" class="btn btn-primary">Bayar Sekarang</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <h3 class="card-title">Pengumuman</h3>
                    <p class="card-text">Layanan untuk melihat pengumuman penting dari pengurus warga. Tetap terinformasi dengan update terbaru.</p>
                    <a href="{{ route('warga.pengumuman') }}" class="btn btn-primary">Lihat Pengumuman</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <h3 class="card-title">Kartu Keluarga</h3>
                    <p class="card-text">Layanan untuk melihat kartu keluarga secara digital</p>
                    <a href="{{ route('warga.keluargaku') }}" class="btn btn-primary">Lihat Kartu Keluarga</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- @extends('warga.layouts.template')

@section('content') --}}
@extends('warga.layouts.template')

@section('content')
<div class="container mt-5">
    <div class="jumbotron text-center">
        <h1 class="display-4">Welcome</h1>
        <p class="lead">Selamat datang di website resmi warga. Di sini Anda dapat menemukan berbagai informasi dan layanan yang kami sediakan.</p>
    </div>
    
    <div class="row mt-4">
        <div class="col-md-4">
            <h3>Berita Terbaru</h3>
            <p>Temukan berita terbaru seputar kegiatan warga dan informasi penting lainnya.</p>
            <a href="{{ route('warga.pengumuman') }}" class="btn btn-primary">Lihat Berita</a>
        </div>
        
        <div class="col-md-4">
            <h3>Layanan</h3>
            <p>Kami menyediakan berbagai layanan untuk memenuhi kebutuhan warga, mulai dari administrasi hingga pengaduan.</p>
            <a href="{{ route('warga/layanan') }}" class="btn btn-primary">Lihat Layanan</a>
        </div>
        
        <div class="col-md-4">
            <h3>Kontak Kami</h3>
            <p>Hubungi kami jika Anda memiliki pertanyaan atau memerlukan bantuan lebih lanjut.</p>
            <a href="{{ route('warga/kontak') }}" class="btn btn-primary">Kontak Kami</a>
        </div>
    </div>
</div>
@endsection

{{-- @endsection
<main class="d-flex align-items-center">
    <div class="container m-5">
      
    </div>  
  </main> --}}
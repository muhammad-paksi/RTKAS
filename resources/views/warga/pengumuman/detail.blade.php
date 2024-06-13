@extends('warga.layouts.template')

@section('content')
    <div class="container">
        <h2>{{ $pengumuman->judul_pengumuman }}</h2>
        <p>{{ $pengumuman->isi_pengumuman }}</p>
        <p><strong>Tanggal: </strong>{{ $pengumuman->tanggal }}</p>
        @if($pengumuman->gambar)
            <p><img src="{{ asset('storage/pengumuman/' . $pengumuman->gambar) }}" alt="Gambar Pengumuman" width="500" height="500"></p>
        @endif
        <a href="{{ route('warga.pengumuman') }}" class="btn btn-primary">Kembali</a>
    </div>
@endsection

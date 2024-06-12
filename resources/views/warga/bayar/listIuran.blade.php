@extends('warga.layouts.template')

@section('content')
<style>
    .title-white {
        color: white; /* Warna teks putih */
    }
    .table th, .table td {
        color: white; /* Warna teks putih untuk tabel */
    }
</style>
<div class="container flex">
    <div class="a">
        <h3 class="title-white">Notifikasi Belum Dibayar</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>ID Notifikasi</th>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Nominal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($notifikasi_belum_dibayar as $notif)
                    <tr>
                        <td>{{ $notif->id_notifikasi }}</td>
                        <td>{{ $notif->judul }}</td>
                        <td>{{ $notif->tanggal }}</td>
                        <td>{{ $notif->nominal }}</td>
                        <td>
                            <a href="{{ route('warga.bayariuran', $notif->id_notifikasi) }}" class="btn btn-primary">Bayar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="a">
        <h3 class="title-white">Kas Sudah Terbayar</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>ID Notifikasi</th>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Nominal</th>
                    {{-- <th>Status</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach($notifikasi_pending as $notif)
                    <tr>
                        <td>{{ $notif->id_notifikasi }}</td>
                        <td>{{ $notif->judul }}</td>
                        <td>{{ $notif->tanggal }}</td>
                        <td>{{ $notif->nominal }}</td>
                        {{-- <td>{{ $notif->bayar->status }}</td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

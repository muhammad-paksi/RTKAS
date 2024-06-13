@extends('warga.layouts.template')

@section('content')
    <div class="container">
        <h2>Daftar Pengumuman</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Tanggal</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pengumuman as $item)
                    <tr>
                        <td>{{ $item->judul_pengumuman }}</td>
                        <td>{{ Str::limit($item->isi_pengumuman, 50) }}</td>
                        <td>{{ $item->tanggal }}</td>
                        <td><a href="{{ route('warga.pengumuman.detail', $item->id) }}" class="btn btn-info">Selengkapnya</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

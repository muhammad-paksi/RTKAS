@extends('warga.layouts.template')
@section('content')
<div class="container">
    <h3>Keluargaku</h3>
    <table class="table">
        <thead>
            <tr>
                <th>NIK</th>
                <th>Nama Lengkap</th>
                <th>Tanggal Lahir</th>
                <th>Agama</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($keluarga as $anggota)
                <tr>
                    <td>{{ $anggota->nik }}</td>
                    <td>{{ $anggota->nama_lengkap }}</td>
                    <td>{{ $anggota->tanggal_lahir }}</td>
                    <td>{{ $anggota->agama }}</td>
                    <td>{{ $anggota->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
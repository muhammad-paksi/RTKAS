@extends('bendahara.layouts.template')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Total Nominal Pembayaran Kas</h3>
    </div>
    <div class="card-body">
        <p class="card-text">
            Total Nominal Pembayaran Kas: <strong>Rp {{ number_format($kas, 2, ',', '.') }}</strong>
        </p>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID Pembayaran</th>
                    <th>NIK</th>
                    <th>ID Notifikasi</th>
                    <th>Nominal</th>
                    <th>Status</th>
                    <th>Tanggal Bayar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($history as $bayar)
                    <tr>
                        <td>{{ $bayar->id_bayar }}</td>
                        <td>{{ $bayar->nik }}</td>
                        <td>{{ $bayar->id_notifikasi }}</td>
                        <td>Rp {{ number_format($bayar->nominal, 2, ',', '.') }}</td>
                        <td>{{ $bayar->status }}</td>
                        <td>{{ $bayar->tanggal_bayar }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</div>
@endsection
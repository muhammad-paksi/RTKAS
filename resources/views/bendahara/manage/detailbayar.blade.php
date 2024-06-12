@extends('bendahara.layouts.template')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Detail Bayar Iuran</h3>
    </div>
    <div class="card-body">
        <p><strong>ID Pembayaran:</strong> {{ $bayar->id_bayar }}</p>
        <p><strong>Judul Notifikasi:</strong> {{ $bayar->notif->judul ?? 'N/A' }}</p>
        <p><strong>Nama Lengkap:</strong> {{ $bayar->warga->nama_lengkap ?? 'N/A' }}</p>
        <p><strong>Nominal:</strong> Rp {{ number_format($bayar->nominal, 2, ',', '.') }}</p>
        <p><strong>Status:</strong> {{ $bayar->status }}</p>
        <p><strong>Tanggal Bayar:</strong> {{ $bayar->tanggal_bayar }}</p>
        @if($bayar->bukti)
            <p><strong>Bukti Pembayaran:</strong></p>
            <img src="{{ asset('storage/bukti_pembayaran/'.$bayar->bukti) }}" alt="Bukti Pembayaran" style="max-width: 100%;">
        @endif
        <form action="{{ route('bendahara.updateStatus', $bayar->id_bayar) }}" method="POST" class="mt-4">
            @csrf
            <div class="form-group">
                <label for="status">Ubah Status:</label>
                <select name="status" id="status" class="form-control">
                    <option value="belum" {{ $bayar->status == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="selesai" {{ $bayar->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Update Status</button>
        </form>
    </div>
</div>
@endsection
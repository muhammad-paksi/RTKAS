<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BayarIuran extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'nik',
        'id_notifikasi',
        'bukti',
        'nominal',
        'nik_kk',
        'status',
        'tanggal_bayar'
    ];

    protected $table = 'bayariuran';
    protected $primaryKey = 'id_bayar';

    public function notif()
    {
        return $this->belongsTo(NotifikasiIuran::class, 'id_notifikasi', 'id_notifikasi');
    }

    public function kk()
    {
        return $this->belongsTo(KartuKeluarga::class, 'nik_kk', 'nik_kk');
    }

    public function warga()
    {
        return $this->belongsTo(Penduduk::class, 'nik', 'nik');
    }
}

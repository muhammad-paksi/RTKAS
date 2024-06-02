<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\KartuKeluarga;

class Penduduk extends Model
{
    use HasFactory;

    protected $fillable = [
        'nik',
        'nama_lengkap',
        'tanggal_lahir',
        'nik_kk',
    ];
    protected $table = 'penduduk';
    protected $primaryKey = 'nik';

    // Define the relationship with the Kk model
    public function kk()
    {
        return $this->belongsTo(KartuKeluarga::class, 'nik_kk', 'nik_kk');
    }

    // Define the relationship with the Alamat model
    
}

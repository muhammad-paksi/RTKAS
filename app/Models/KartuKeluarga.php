<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Penduduk;

class KartuKeluarga extends Model
{
    use HasFactory;

    protected $fillable = [
        'nik_kk',
        'nama_kepala',
        'alamat_kk'
    ];
    protected $table = 'kk';
    protected $primaryKey = 'nik_kk';


   
    public function penduduks()
    {
        return $this->hasMany(Penduduk::class, 'nik_kk', 'nik_kk');
    }
}

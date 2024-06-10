<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Iuran;
class NotifikasiIuran extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_notifikasi';
    protected $table = 'notifikasiiuran';
    
    protected $fillable = [
        'judul',
        'id_iuran',
        'tanggal',
        'informasi',
        'nominal',
    ];

    public function iuran()
    {
        return $this->belongsTo(Iuran::class, 'id_iuran', 'id_iuran');
    }
}

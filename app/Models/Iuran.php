<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iuran extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_iuran',
        'tanggal',
    ];

    protected $table = 'iuran';
    protected $primaryKey = 'id_iuran';

    public function notif()
    {
        return $this->hasMany(NotifikasiIuran::class, 'id_iuran', 'id_iuran');
    }
}

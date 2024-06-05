<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iuran extends Model
{
    use HasFactory;

    protected $fillable = [
        'nik_kk',
        'nama_iuran',
    ];

    protected $table = 'iuran';
    protected $primaryKey = 'id_iuran';
}

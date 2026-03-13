<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
        use HasFactory;

    protected $table = 'Jurusan';

    protected $fillable = [
        'Nama_Jurusan',
        'Kode_Jurusan'
    ];
}

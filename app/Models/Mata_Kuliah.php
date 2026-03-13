<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mata_Kuliah extends Model
{
        use HasFactory;

    protected $table = 'Mata_Kuliah';

    protected $fillable = [
        'jurusan_id',
        'Kode_MK',
        'Nama_MK',
        'SKS',
        'dosen_id',
    ];
}

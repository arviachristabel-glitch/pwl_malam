<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
     use HasFactory;

    protected $table = 'mahasiswa';

    protected $fillable = [
        'fullname',
        'NIM',
        'NIDN',
        'Pendidikan_Terakhir',
        'Jurusan_id',
        'Tempat_Lahir',
        'Tanggal_Lahir',
        'alamat'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; // <-- Tambahkan baris ini


class Dosen extends Model
{
     use HasFactory;

    protected $table = 'dosen';

    protected $fillable = [
        'fullname',
        'NIP',
        'NIDN',
        'Pendidikan_Terakhir',
        'Jurusan_id',
        'Tempat_Lahir',
        'Tanggal_Lahir',
        'alamat'
    ];
}

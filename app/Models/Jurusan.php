<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; // <-- Tambahkan ini

class Jurusan extends Model
{
    use HasFactory;

    protected $table = 'Jurusan';

    protected $fillable = [
        'Nama_Jurusan',
        'Kode_Jurusan'
    ];
}
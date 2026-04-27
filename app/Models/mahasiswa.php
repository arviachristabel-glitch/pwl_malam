<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; // <-- Tambahkan baris ini

class mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';

    protected $fillable = [
        'fullname',
        'NIM',
        'NIDN',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat'
    ];
}
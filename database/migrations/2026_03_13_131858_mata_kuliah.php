<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
             Schema::create('Mata_Kuliah',function (Blueprint $table){
            $table->id();
            $table->integer('jurusan_id');
            $table->string('Kode_MK')->unique();
            $table->string('Nama_MK')->unique();
            $table->string('SKS')->nullable();
            $table->integer('dosen_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

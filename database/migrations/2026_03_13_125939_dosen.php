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
        Schema::create('Dosen',function (Blueprint $table){
            $table->id();
            $table->string('fullname');
            $table->string('NIP')->unique();
            $table->string('NIDN')->unique();
            $table->string('Pendidikan_Terakhir')->nullable();
            $table->integer('Jurusan_id');
            $table->string('Tempat_Lahir')->nullable();
            $table->date('Tanggal_Lahir')->nullable();
            $table->text('alamat');
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

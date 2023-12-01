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
        Schema::create('form_data_2', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat');
            $table->string('agama');
            $table->integer('usia');
            $table->string('jenis_kelamin');
            $table->string('pendidikan_terakhir');
            $table->string('suku');
            $table->string('status_pekerjaan');
            $table->string('pendapatan');
            $table->string('hubungan_pasien');
            $table->string('lama_merawat_pasien_stroke');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_data_2');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCetakSertifikatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cetak_sertifikats', function (Blueprint $table) {
            $table->id();
            $table->string('No_Sertifikat')->references('No_Sertifikat')->on('Datanilai')->onDelete('cascade');
            $table->string('id_absensi');
            $table->string('No_peserta');
            $table->string('Nama_peserta');
            $table->string('NPelatihan');
            $table->string('DPelatihan')->nullable();
            $table->string('Kode_Enkripsi');
            $table->string('kehadiran');
            $table->string('tanggal');
            $table->string('J_Kelamin');
            $table->string('Nilai');
            $table->string('No_tlpn');
            $table->string('email');
            $table->string('alamat');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cetak_sertifikats');
    }
}

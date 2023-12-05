<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatanilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datanilais', function (Blueprint $table) {
            $table->id();
            $table->string('No_peserta')->references('No_peserta')->on('datapeserta')->onDelete('cascade');
            $table->string('Nama_peserta');
            $table->string('NPelatihan');
            $table->string('J_kelamin');
            $table->string('No_tlpn');
            $table->string('email');
            $table->string('alamat');
            $table->string('kehadiran')->nullable();
            $table->string('tanggal')->nullable();
            $table->string('Nilai')->nullable();
            $table->string('No_Sertifikat')->unique()->nullable();
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
        Schema::dropIfExists('datanilais');
    }
}

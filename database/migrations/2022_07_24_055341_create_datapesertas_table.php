<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapesertas', function (Blueprint $table) {
            $table->id();
            $table->string('No_peserta')->unique();
            $table->string('Nama_peserta');
            $table->string('J_kelamin');
            $table->double('No_tlpn');
            $table->string('email')->unique();
            $table->string('alamat');
            $table->string('NPelatihan');
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
        Schema::dropIfExists('datapesertas');
    }
};

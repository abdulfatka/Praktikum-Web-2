<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nim', 15)->unique();
            $table->string('nama', 45);
            $table->string('tmp_lahir', 30);
            $table->date('tgl_lahir');
            $table->double('ipk');
            $table->unsignedBigInteger('prodi_id');
            $table->unsignedBigInteger('rombel_id');
            $table->foreign('prodi_id')->references('id')->on('prodis')->onDelete('cascade');
            $table->foreign('rombel_id')->references('id')->on('rombongan_belajars')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mahasiswas');
    }

};

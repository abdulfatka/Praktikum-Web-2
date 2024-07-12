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
        Schema::create('rombongan_belajars', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 15);
            $table->integer('thn_masuk');
            $table->string('dosen_pa', 15);
            $table->foreign('dosen_pa')->references('nidn')->on('dosens')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rombongan_belajars');
    }

};

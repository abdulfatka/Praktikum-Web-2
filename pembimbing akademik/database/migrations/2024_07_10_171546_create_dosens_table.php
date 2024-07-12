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
        Schema::create('dosens', function (Blueprint $table) {
            $table->id();
            $table->string('nidn', 15)->unique();
            $table->string('nama', 45);
            $table->string('tmp_lahir', 45);
            $table->date('tgl_lahir');
            $table->char('jk', 1);
            $table->unsignedBigInteger('prodi_id');
            $table->foreign('prodi_id')->references('id')->on('prodis')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dosens');
    }

};

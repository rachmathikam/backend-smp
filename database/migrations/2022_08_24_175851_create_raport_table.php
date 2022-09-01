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
        Schema::create('raport', function (Blueprint $table) {
            $table->id();
            $table->foreignId('class_id')->references('id')->on('classes');
            $table->foreignId('siswa_id')->references('id')->on('siswas');
            $table->foreignId('mapel_id')->references('id')->on('mata_pelajarans');
            $table->foreignId('guru_id')->references('id')->on('gurus');
            $table->foreignId('eskul_id')->references('id')->on('eskul');
            $table->text('deksripsi');
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
        Schema::dropIfExists('raport');
    }
};

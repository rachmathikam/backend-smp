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
        Schema::create('nilai', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guru_id')->references('id')->on('gurus');
            $table->foreignId('siswa_id')->references('id')->on('siswas');
            $table->foreignId('mapel_id')->references('id')->on('mata_pelajarans');
            $table->integer('nilai');
            $table->integer('rata_rata');
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
        Schema::dropIfExists('nilai');
    }
};

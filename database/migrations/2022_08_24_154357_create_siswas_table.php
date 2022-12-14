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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onupdate('cascade')->ondelete('cascade');
            $table->string('nama',100);
            $table->string('tempat_lahir',20);
            $table->date('tanggal_lahir');
            $table->string('gender',10);
            $table->year('tahun_masuk');
            $table->string('agama',10);
            $table->text('alamat');
            $table->string('no_telp')->nullable();
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
        Schema::dropIfExists('siswas');
    }
};

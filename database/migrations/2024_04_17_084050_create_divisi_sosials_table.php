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
        Schema::create('tbl_divisi_sosial', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('angkatan');
            $table->enum('jabatan', ['ketua', 'wakil ketua', 'anggota']);
            $table->string('foto');
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
        Schema::dropIfExists('tbl_divisi_sosial');
    }
};

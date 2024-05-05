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
        Schema::create('tbl_galeri_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('judul');
            $table->text('deskripsi');
            $table->date('tanggal_kegiatan');
            $table->string('foto');
            $table->enum('status', ['publish', 'unpublish']);
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
        Schema::dropIfExists('tbl_galeri_kegiatan');
    }
};

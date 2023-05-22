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
        Schema::create('upload_tugas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('angkatan_id');
            $table->unsignedBigInteger('jurusan_id');
            $table->unsignedBigInteger('kelas_id');
            $table->string('dokumen_file');
            $table->dateTime('tanggal_upload');
            $table->dateTime('tanggal_selesai');
            $table->text('keterangan');
            $table->enum('status', ['Selesai','Tidak Selesai'])->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('angkatan_id')->references('id')->on('angkatans')->onDelete('cascade');
            $table->foreign('jurusan_id')->references('id')->on('jurusans')->onDelete('cascade');
            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('upload_tugas');
    }
};

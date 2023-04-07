<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('pemohon', function (Blueprint $table) {
      $table->id('id_pemohon');
      $table->unsignedBigInteger('id_user');
      $table->foreign('id_user')
        ->references('id')
        ->on('user')
        ->onDelete('cascade')
        ->onUpdate('cascade');
      $table->string('nama_pemohon')->nullable();
      $table->string('no_identitas')->nullable();
      $table->string('no_telp')->nullable();
      $table->string('alamat')->nullable();
      $table->string('pekerjaan')->nullable();
      $table->string('instansi')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('pemohon');
  }
};

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
    Schema::create('pengumuman', function (Blueprint $table) {
      $table->id('id_pengumuman');
      $table->unsignedBigInteger('id_admin');
      $table->foreign('id_admin')
        ->references('id_admin')
        ->on('admin')
        ->onDelete('cascade')
        ->onUpdate('cascade');
      $table->string('judul_pengumuman')->nullable();
      $table->longText('isi_pengumuman')->nullable();
      $table->string('gambar_pengumuman')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('pengumuman');
  }
};

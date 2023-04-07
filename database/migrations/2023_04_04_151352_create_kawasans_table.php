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
    Schema::create('kawasan', function (Blueprint $table) {
      $table->id('id_kawasan');
      $table->unsignedBigInteger('id_kategori');
      $table->foreign('id_kategori')
        ->references('id_kategori')
        ->on('kategori_kawasan')
        ->onDelete('cascade')
        ->onUpdate('cascade');
      $table->string('nama_kawasan');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('kawasan');
  }
};

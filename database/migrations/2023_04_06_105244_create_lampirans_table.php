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
    Schema::create('lampiran', function (Blueprint $table) {
      $table->id('id_lampiran');
      $table->unsignedBigInteger('id_pengajuan');
      $table->foreign('id_pengajuan')
        ->references('id_pengajuan')
        ->on('pengajuan')
        ->onDelete('cascade')
        ->onUpdate('cascade');
      $table->string('surat_pengantar')->nullable();
      $table->string('surat_pernyataan')->nullable();
      $table->string('kartu_identitas')->nullable();
      $table->string('proposal_kegiatan')->nullable();
      $table->string('surat_izin_produksi')->nullable();
      $table->string('tanda_pendaftaran_rekaman')->nullable();
      $table->string('sinopsis_film')->nullable();
      $table->string('daftar_crew')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('lampiran');
  }
};

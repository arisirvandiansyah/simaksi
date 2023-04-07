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
    Schema::create('pengajuan', function (Blueprint $table) {
      $table->id('id_pengajuan');
      $table->timestamps();
      $table->unsignedBigInteger('id_user');
      $table->foreign('id_user')
        ->references('id')
        ->on('user')
        ->onDelete('cascade')
        ->onUpdate('cascade');
      $table->enum('jenis_pengajuan', [
        'Penerbitan SIMAKSI',
        'Perpanjangan SIMAKSI'
      ])->default('Penerbitan SIMAKSI');
      $table->enum('status_pengajuan', [
        'Menunggu Konfirmasi',
        'Sedang Diproses',
        'Pengajuan Ditolak',
        'Pengajuan Disetujui'
      ])->default('Menunggu Konfirmasi');
      $table->unsignedBigInteger('id_kegiatan');
      $table->foreign('id_kegiatan')
        ->references('id_kegiatan')
        ->on('kegiatan')
        ->onDelete('cascade')
        ->onUpdate('cascade');
      $table->unsignedBigInteger('id_kawasan');
      $table->foreign('id_kawasan')
        ->references('id_kawasan')
        ->on('kawasan')
        ->onDelete('cascade')
        ->onUpdate('cascade');
      $table->string('judul_kegiatan')->nullable();
      $table->string('no_surat')->nullable();
      $table->date('tgl_surat')->nullable();
      $table->string('perihal_surat')->nullable();
      $table->string('penandatangan_surat')->nullable();
      $table->date('tgl_mulai')->nullable();
      $table->date('tgl_selesai')->nullable();
      $table->string('jml_pengikut')->nullable();
      $table->date('tgl_usulan_presentase')->nullable();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('pengajuan');
  }
};

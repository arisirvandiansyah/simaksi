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
    Schema::create('user', function (Blueprint $table) {
      $table->id();
      $table->timestamp('verified_at')->nullable();
      // $table->string('nama')->nullable();
      $table->string('username')->unique();
      $table->string('email')->unique();
      $table->string('password');
      $table->enum('role', [
        'Admin',
        'Pemohon'
      ])->default('Pemohon');
      $table->bigInteger('verification_code')->nullable();
      // $table->rememberToken();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('user');
  }
};

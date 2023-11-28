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
        Schema::create('akun', function (Blueprint $table) {
            $table->integer('id_akun', true);
            $table->integer('kode_sekolah');
            $table->string('username', 60);
            $table->string('password', 60);
            $table->enum('role', ['pemimpin_bts', 'admin']);

            // Foreign Key

            $table->foreign('kode_sekolah')->on('sekolah')
                ->references('kode_sekolah')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('akun');
    }
};

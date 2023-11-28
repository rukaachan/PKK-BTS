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
        Schema::create('pemimpin_sekolah', function (Blueprint $table) {
            $table->integer('id_pemimpin', true);
            $table->integer('kode_sekolah');
            $table->integer('wakil_kepala_sekolah');
            $table->integer('ketua_osis');
            $table->integer('ketua_bts');

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
        Schema::dropIfExists('pemimpin_sekolah');
    }
};

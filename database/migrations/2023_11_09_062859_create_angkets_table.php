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
        Schema::create('angket', function (Blueprint $table) {
            $table->integer('id_angket', true);
            $table->integer('id_kelas');
            $table->string('nama_angket', 60);
            $table->text('foto_angket');

            // Foreign Key

            $table->foreign('id_kelas')->on('kelas')
                ->references('id_kelas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('angket');
    }
};

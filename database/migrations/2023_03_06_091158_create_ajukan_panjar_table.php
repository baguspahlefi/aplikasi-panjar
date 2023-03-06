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
        Schema::create('ajukan_panjar', function (Blueprint $table) {
            $table->bigIncrements('ajukan_panjar_id');
            $table->string('nama_lengkap');
            $table->bigInteger('no_telepon');
            $table->string('email');
            $table->string('no_perkara');
            $table->bigInteger('no_rekening');
            $table->string('ktp');
            $table->string('kta');    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ajukan_panjar');
    }
};

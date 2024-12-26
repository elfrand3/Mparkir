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
        Schema::create('dt_parkirs', function (Blueprint $table) {
            $table->bigIncrements('id_parkir'); // Mengganti nama kolom id menjadi id_parkir
            $table->integer('mobil');
            $table->integer('motor');
            $table->integer('sh_mobil');
            $table->integer('sh_motor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dt_parkirs');
    }
};

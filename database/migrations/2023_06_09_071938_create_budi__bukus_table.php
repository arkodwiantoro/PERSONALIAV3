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
        Schema::create('budibuku', function (Blueprint $table) {
            $table->bigInteger('IDBuku')->primary;
            $table->string('judul', 30);
            $table->string('penulis', 30);
            $table->string('penerbit', 30);
            $table->date('tahunterbit');
            $table->Integer('jumlahstok');
            $table->bigInteger('dendabuku');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('budibuku');
    }
};

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
        Schema::create('special_menus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('food_id'); // Kolom food_id
            $table->string('nama');
            $table->integer('harga');
            $table->string('deskripsi')->nullable();
            $table->string('gambar')->default('noimage.png');
            $table->timestamps();
        
            // Foreign key relasi ke tabel food
            $table->foreign('food_id')->references('id')->on('food')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('special_menus');
    }
};

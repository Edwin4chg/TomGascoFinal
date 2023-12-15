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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            
            // Campos de la tabla users
            $table->foreignId('user_id')->constrained();
            $table->string('user_name');
            $table->string('user_email');
            $table->string('user_photo')->nullable();

            $table->foreignId('song_id')->constrained();
            $table->string('song_title');
            $table->decimal('song_price', 8, 2);
            $table->text('song_description')->nullable();
            $table->string('song_audio');
            $table->string('song_photo')->nullable();
            $table->string('song_keywords')->nullable();
            $table->string('song_artist');
            
            // Otros campos específicos de la tabla carts
            $table->decimal('price', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};

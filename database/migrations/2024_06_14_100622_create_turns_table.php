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
        Schema::create('turns', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')->index()->constrained('users');
            $table->foreignId('game_id')->index()->constrained('games');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turns');
    }
};

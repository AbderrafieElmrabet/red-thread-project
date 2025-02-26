<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('display_boards', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Title of the display board
            $table->string('image')->nullable(); // Path to the image for the display board
            $table->text('description'); // Description of the display board post
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Admin who created the post
            $table->timestamps(); // created_at, updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('display_boards');
    }
};
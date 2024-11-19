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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('judul', 200);
            $table->text('konten');
            $table->unsignedBigInteger('penulis')->nullable(); // Allow penulis to be nullable
            $table->foreign('penulis')
                  ->references('id')
                  ->on('users');
            $table->string('status', 50) ->default('Unverified');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};

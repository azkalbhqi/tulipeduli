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
            $table->string('slug', 100);
            $table->string('judul', 200);
            $table->text('konten');
            $table->string('penulis', 100);
            $table->date('tanggal');
            $table->foreignId('id_admin')->constrained('admin')->onDelete('cascade');
            $table->foreignId('id_prengguna')->constrained('penggunas')->onDelete('cascade');
            $table->string('status', 50);
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


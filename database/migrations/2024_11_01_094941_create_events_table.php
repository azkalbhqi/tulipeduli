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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 200);
            $table->string('lokasi', 200);
            $table->time('waktu');
            $table->date('tanggal');
            $table->text('deskripsi');
            $table->text('link_pendaftaran')->nullable();
            $table->unsignedBigInteger('id_admin');
            $table->unsignedBigInteger('id_komunitas');
            $table->foreign('id_admin')->references('id')->on('admin')->onDelete('cascade');
            $table->foreign('id_komunitas')->references('id')->on('komunitas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};

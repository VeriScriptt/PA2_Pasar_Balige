<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokoTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('toko', function (Blueprint $table) {
            $table->id('id_toko');
            $table->unsignedBigInteger('id_user'); // Menambahkan kolom id_user
            $table->string('nama_toko');
            $table->string('gambar_toko')->nullable();
            $table->string('nama_pemilik');
            $table->integer('nomor_toko');
            $table->enum('lantai_toko',['Lantai 1','Lantai 2','Balairung'])->default('Lantai 1');
            $table->string('email')->unique();
            $table->integer('nomor_telepon');
            $table->timestamps(); // Menambahkan timestamps untuk created_at dan updated_at

            // Mendefinisikan foreign key
            $table->foreign('id_user')->references('user_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('toko');
    }
}

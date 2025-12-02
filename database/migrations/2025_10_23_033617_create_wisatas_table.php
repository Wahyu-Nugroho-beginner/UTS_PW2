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
        Schema::create('login_users', function (Blueprint $table) {
            $table->id();
            $table->string('email', 100)->unique();
            $table->string('username', 50);
            $table->string('password'); // Hapus , 50 agar jadi VARCHAR(255)
            $table->timestamps();
        });

        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk', 100);
            $table->integer('jumlah_produk');
            $table->integer('harga');
            $table->timestamps();
        });

        Schema::create('ratings', function (Blueprint $table) {
            $table->id('id_rating');
            $table->foreignId('id_user')->constrained('login_users')->onDelete('cascade');
            $table->string('nama', 50);
            $table->text('komentar');
            $table->integer('rating');
            $table->timestamps();
        });

        Schema::create('pesanans', function (Blueprint $table) {
            $table->id('id_pesanan');
            $table->foreignId('id_user')->constrained('login_users')->onDelete('cascade');
            $table->foreignId('id_produk')->constrained('produks')->onDelete('cascade');
            $table->integer('jumlah_pesanan');
            $table->integer('total_harga');
            $table->string('nama_produk', 50);
            $table->date('tanggal_pesanan');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pesanans');
        Schema::dropIfExists('ratings');
        Schema::dropIfExists('produks');
        Schema::dropIfExists('login_users');
    }
};

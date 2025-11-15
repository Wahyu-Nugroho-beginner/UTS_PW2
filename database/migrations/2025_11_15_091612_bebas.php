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
           Schema::create('apapap', function (Blueprint $table) {
            $table->id('is');
            $table->foreignId('qqr')->constrained('login_users')->onDelete('cascade');
            $table->foreignId('duk')->constrained('produks')->onDelete('cascade');
            $table->integer('jesanan');
            $table->integer('al_harga');
            $table->string('oduk', 50);
            $table->date('tangn');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

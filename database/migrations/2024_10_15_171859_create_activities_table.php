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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();  // Primarni ključ
            $table->string('nameActivity', 255);  // Naziv aktivnosti
            $table->unsignedBigInteger('user_id');  // Strani ključ za korisnika (učitelja)
            $table->timestamp('created_at_activity')->useCurrent();  // Datum kreiranja (default: trenutni)


            // Definiraj vanjski ključ prema 'users' tablici
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};

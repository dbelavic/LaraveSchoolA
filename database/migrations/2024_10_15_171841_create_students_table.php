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
        Schema::create('students', function (Blueprint $table) {
            $table->id();  // Primarni ključ
            $table->string('nameStudent', 50);  // Ime učenika
            $table->string('surnameStudent', 50);  // Prezime učenika
            $table->string('emailStudent', 255)->unique();  // Email učenika (jedinstven)
            $table->integer('classNumber');  // Broj razreda
            $table->char('className', 1);  // Slovo razreda (npr. A, B)
            $table->unsignedBigInteger('school_id');  // Strani ključ za školu
            $table->timestamp('created_at_Student')->useCurrent();  // Datum kreiranja (default: trenutni)


            // Definiraj vanjski ključ prema 'schools' tablici
            $table->foreign('school_id')->references('id')->on('schools');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};

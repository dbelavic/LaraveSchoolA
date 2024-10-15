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
        Schema::create('attendance', function (Blueprint $table) {
            $table->id();  // Primarni ključ
            $table->unsignedBigInteger('student_id');  // Strani ključ za učenika
            $table->unsignedBigInteger('activity_id');  // Strani ključ za aktivnost
            $table->date('dateAttendance');  // Datum prisustva
            $table->text('notes')->nullable();  // Bilješke (opcionalno)
            $table->timestamp('created_at_Attendance')->useCurrent();  // Datum kreiranja (default: trenutni)


            // Definiraj vanjske ključeve prema 'students' i 'activities' tablicama
            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('activity_id')->references('id')->on('activities');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendance');
    }
};

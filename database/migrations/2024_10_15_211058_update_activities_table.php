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
        Schema::table('activities', function (Blueprint $table) {
            $table->dropColumn('created_at_activity'); // Izbrišite stupac
            $table->timestamps(); // Dodajte timestamps (created_at i updated_at)
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('activities', function (Blueprint $table) {

            $table->dropTimestamps(); // Uklonite timestamps
            //
        });
    }
};

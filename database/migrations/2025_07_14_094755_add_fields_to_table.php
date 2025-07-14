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
        Schema::table('cars', function (Blueprint $table) {
            $table->string('make');
            $table->string('model');
            $table->date('produced_on');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
{
    Schema::table('cars', function (Blueprint $table) {
        $table->dropColumn(['make', 'model', 'produced_on']);
    });
}

};

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
        Schema::create('calendars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booker_id')->nullable()->constrained('bookers')->cascadeOnDelete();
            $table->string('time')->nullable();
            $table->date('date')->nullable();
            $table->text('text')->nullable();
            $table->string('bcolor')->nullable();
            $table->string('tcolor')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calendars');
    }
};

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
        Schema::create('posting', function (Blueprint $table) {
            $table->id();
            $table->text('pickup');
            $table->text('dropoff');
            $table->date('date');
            $table->text('weight');
            $table->text('price');
            $table->text('broker');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posting');
    }
};

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
        Schema::create('consultation_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId("pet_id")->constrained()->restrictOnDelete();
            $table->foreignId("employee_id")->constrained()->restrictOnDelete();
            $table->foreignId("appointment_id")->constrained()->restrictOnDelete();
            $table->text("description");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultation_histories');
    }
};

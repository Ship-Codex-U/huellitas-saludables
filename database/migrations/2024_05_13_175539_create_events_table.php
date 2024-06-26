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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->foreignId("customer_id")->constrained()->restrictOnDelete();
            $table->foreignId("pet_id")->constrained()->restrictOnDelete();
            $table->foreignId("employee_id")->constrained()->restrictOnDelete();
            $table->text("comments")->nullable();
            $table->dateTime("start");
            $table->foreignId("appointment_status_id")->constrained()->restrictOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};

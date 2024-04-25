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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("last_name");
            $table->date("date_birthday");
            $table->string("email");
            $table->string("phone_number");
            $table->string("state");
            $table->string("city");
            $table->string("street_number");
            $table->string("alternative_contact_name");
            $table->string("alternative_contact_phone_number");
            $table->foreignId("position_type_id")->constrained()->restrictOnDelete();
            $table->foreignId("employee_status_id")->constrained()->restrictOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};

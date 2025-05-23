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
        Schema::create('employee_tb_table__', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('Midname');
            $table->string('lname');
            $table->string('age');
            $table->string('add');
            $table->string('zip');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_tb_table__');
    }
};

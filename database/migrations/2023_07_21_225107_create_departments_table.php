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
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('study_program');
            $table->string('department_head');
            $table->string('department_secretary');
            $table->text('brief_description')->nullable();
            $table->text('vision')->nullable();
            $table->text('mision')->nullable();
            $table->text('main_competency')->nullable();
            $table->text('support_competency')->nullable();
            $table->text('other_competency')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};

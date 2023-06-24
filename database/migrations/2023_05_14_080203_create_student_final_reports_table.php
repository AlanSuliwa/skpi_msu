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
        Schema::create('student_final_reports', function (Blueprint $table) {
            $table->id();
            $table->string('indonesian_title')->comment('judul bahasa indonesia');
            $table->string('english_title')->comment('judul bahasa inggris');
            $table->string('lecturer1')->comment('pembimbing 1');
            $table->string('lecturer2')->comment('pembimbing 2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_final_reports');
    }
};

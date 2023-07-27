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
        Schema::create('organizational_experince_certificate_files', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->comment('foreign key user');
            $table->string('indonesian_title')->comment('judul Indonesia');
            $table->string('english_title')->comment('judul Inggris');
            $table->string('institution')->comment('lembaga');
            $table->string('file')->comment('file');
            $table->string('status')->comment('status verifikasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizational_experince_certificate_files');
    }
};

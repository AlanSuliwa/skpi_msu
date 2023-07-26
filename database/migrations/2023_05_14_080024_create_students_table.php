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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->comment('foreign key user');
            $table->string('department')->comment('nama jurusan');
            $table->string('study_program')->comment('program studi');
            $table->string('nim')->comment('nim');
            $table->bigInteger('nik')->comment('nik/noktp')->nullable();
            $table->string('name')->comment('nama');
            $table->string('gender')->comment('jenis kelamin')->nullable();
            $table->date('birth_date')->comment('tanggal lahir');
            $table->string('birth_place')->comment('tempat lahir');
            $table->string('phone_number')->comment('no hp')->nullable();
            $table->text('student_address')->comment('alamat mahasiswa')->nullable();
            $table->text('parent_address')->comment('alamat orang tua')->nullable();
            $table->string('religion')->comment('agama')->nullable();
            $table->string('degree')->comment('jenjang');
            $table->string('father_name')->comment('nama ayah')->nullable();
            $table->string('mother_name')->comment('nama ibu')->nullable();
            $table->integer('post_code')->comment('kode pos')->nullable();
            $table->integer('entry_year')->comment('tanggal masuk');
            $table->string('certificate_file')->nullable()->comment('file ijazah');
            $table->string('indonesian_title')->nullable()->comment('judul bahasa indonesia');
            $table->string('english_title')->nullable()->comment('judul bahasa inggris');
            $table->string('lecturer1')->nullable()->comment('pembimbing 1');
            $table->string('lecturer2')->nullable()->comment('pembimbing 2');
            $table->string('inspector1')->nullable()->comment('penguji 1');
            $table->string('inspector2')->nullable()->comment('penguji 2');
            $table->string('inspector3')->nullable()->comment('penguji 3');
            $table->string('inspector4')->nullable()->comment('penguji 4');
            $table->string('inspector5')->nullable()->comment('penguji 5');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};

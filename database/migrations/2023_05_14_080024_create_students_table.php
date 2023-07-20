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
            $table->bigInteger('department_id')->comment('foreign key department');
            $table->string('nim')->comment('nim');
            $table->bigInteger('nik')->comment('nik/noktp');
            $table->string('name')->comment('nim');
            $table->string('gender')->comment('jenis kelamin');
            $table->date('birth_date')->comment('tanggal lahir');
            $table->string('birth_place')->comment('tempat lahir');
            $table->string('phone_number')->comment('no hp');
            $table->text('student_address')->comment('alamat mahasiswa');
            $table->text('parent_address')->comment('alamat orang tua');
            $table->string('religion')->comment('agama');
            $table->string('study_program')->comment('program studi');
            $table->string('major')->comment('jurusan');
            $table->string('degree')->comment('jenjang');
            $table->string('father_name')->comment('nama ayah');
            $table->string('mother_name')->comment('nama ibu');
            $table->integer('post_code')->comment('kode pos');
            $table->integer('entry_year')->comment('tahun masuk');
            $table->string('certificate_file')->nullable()->comment('file ijazah');
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
        Schema::dropIfExists('students');
    }
};

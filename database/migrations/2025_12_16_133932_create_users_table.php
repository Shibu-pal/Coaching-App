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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('roll_no')->unique()->nullable();
            $table->string('email')->unique();
            $table->string('contact', 10);
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('father_occupation');
            $table->string('mother_occupation');
            $table->string('aadhar', 12)->unique();
            $table->date('DOB');
            $table->string('password');
            $table->string('guardian_name');
            $table->string('relation');
            $table->string('vill');
            $table->string('post');
            $table->string('ps');
            $table->string('district');
            $table->string('pin', 6);
            $table->string('state');
            $table->string('nationality');
            $table->string('religion');
            $table->string('cast');
            $table->string('gender');
            $table->string('Institute');
            $table->string('exam');
            $table->string('grade', 10);
            $table->string('signature')->nullable();
            $table->string('student_image')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
            $table->foreignId('cource_id')->constrained('cources')->onDelete('cascade');
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};

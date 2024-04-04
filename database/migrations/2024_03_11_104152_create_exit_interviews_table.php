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
        Schema::create('exit_interviews', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('employee_id')->constrained()->onDelete('cascade');
            // Questão 1
            $table->string('question1')->default('')->nullable();
            $table->text('comment1')->nullable();

            // Questão 2
            $table->string('question2')->default('')->nullable();
            $table->text('comment2')->nullable();

            // Questão 3
            $table->string('question3')->default('')->nullable();
            $table->text('comment3')->nullable();

            // Questão 4
            $table->string('question4')->default('')->nullable();
            $table->text('comment4')->nullable();

            // Questão 5
            $table->string('question5')->default('')->nullable();
            $table->text('comment5')->nullable();

            // Questão 6
            $table->string('question6')->default('')->nullable();
            $table->text('comment6')->nullable();

            // Questão 7
            $table->string('question7')->default('')->nullable();
            $table->text('comment7')->nullable();

            // Questão 8
            $table->string('question8')->default('')->nullable();
            $table->text('comment8')->nullable();

            // Questão 9
            $table->string('question9')->default('')->nullable();
            $table->text('comment9')->nullable();

            // Questão 10
            $table->string('question10')->default('')->nullable();
            $table->text('comment10')->nullable();

            // Questão 11
            $table->string('question11')->default('')->nullable();
            $table->text('comment11')->nullable();

            // Questão 12
            $table->string('question12')->default('')->nullable();
            $table->text('comment12')->nullable();

            // Questão 13
            $table->string('question13')->default('')->nullable();
            $table->text('comment13')->nullable();

            // Questão 14
            $table->string('question14')->default('')->nullable();
            $table->text('comment14')->nullable();

            // Questão 15
            $table->string('question15')->default('')->nullable();
            $table->text('comment15')->nullable();

            // Questão 16
            $table->string('question16')->default('')->nullable();
            $table->text('comment16')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exit_interviews');
    }
};

<?php

use App\Models\companyunit;
use App\Models\employeerole;
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
            $table->string('name');
            $table->date('termination_date');
            $table->string('cpf');
            $table->string('reason_termination');
            $table->string('reason_termination_other');
            $table->foreignId('employeerole_id'); // Adicione esta linha
            $table->foreignId('companyunit_id'); // Adicione esta linha
            $table->foreignId('companysector_id'); // Adicione esta linha
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

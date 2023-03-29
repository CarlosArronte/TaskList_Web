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
        Schema::create('user_type_functions_user_types', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_type_id')
                    ->constrained('user_types')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->foreignId('user_type_functions_id')
                    ->constrained('user_type_functions')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_type_functions_user_types');
    }
};

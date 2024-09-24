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
        Schema::create('job_lists', function (Blueprint $table) {
            $table->uuid('job_id')->primary();
            $table->integer('job_no');
            $table->string('job_details');
            $table->string('keywords');
            $table->foreignUuid('currency_id')->constrained('currencies','currency_id');
            $table->decimal('min_salary')->nullable();
            $table->decimal('max_salary')->nullable();
            $table->string('applicable_visa')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};

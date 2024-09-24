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
        Schema::table('job_lists', function (Blueprint $table) {
            $table->foreignUuid('industry_id')->constrained('industries','industry_id');
            $table->foreignUuid('country_id')->constrained('countries','country_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('job_lists', function (Blueprint $table) {
            $table->dropForeign('industry_id');
            $table->dropColumn('industry_id');

            $table->dropForeign('country_id');
            $table->dropColumn('country_id');

        });
    }
};

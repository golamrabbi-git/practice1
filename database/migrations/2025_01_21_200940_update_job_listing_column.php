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
        //updating the column name
        Schema::table('job_listing', function (Blueprint $table) {
            $table->renameColumn('tite','title');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //rollback logic
        Schema::table('job_listing', function (Blueprint $table) {
            $table->renameColumn('title','tite');
        });
    }
};

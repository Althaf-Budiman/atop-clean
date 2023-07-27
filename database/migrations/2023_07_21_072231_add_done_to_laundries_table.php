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
        Schema::table('laundries', function (Blueprint $table) {
            // false itu 0, true itu 1.
            $table->boolean('done')->default(false)->after('gambar');
            $table->date('done_date')->nullable()->default(null)->after('done');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('laundries', function (Blueprint $table) {
            $table->dropColumn('done');
        });
    }
};

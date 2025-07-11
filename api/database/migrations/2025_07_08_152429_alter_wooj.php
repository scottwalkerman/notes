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
        Schema::table('woojs', function (Blueprint $table) {
            $table->dropColumn('is_pinned');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('woojs', function (Blueprint $table) {
            $table
                ->boolean('is_pinned')
                ->default(false)
                ->after('content');

            $table->index('is_pinned');
        });
    }
};

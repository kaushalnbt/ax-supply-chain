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
        Schema::table('*', function (Blueprint $table) {
            $tables = Schema::getConnection()->getDoctrineSchemaManager()->listTableNames();
        
            foreach ($tables as $table) {
                if (!Schema::hasColumn($table, 'created_at') && !Schema::hasColumn($table, 'updated_at')) {
                    Schema::table($table, function (Blueprint $table) {
                        $table->timestamps();
                    });
                }
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('*', function (Blueprint $table) {
            $tables = Schema::getConnection()->getDoctrineSchemaManager()->listTableNames();

            foreach ($tables as $table) {
                Schema::table($table, function (Blueprint $table) {
                    $table->dropTimestamps();
                });
            }
        });
    }
};

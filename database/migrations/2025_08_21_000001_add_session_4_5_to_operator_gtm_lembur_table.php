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
        Schema::table('operator_gtm_lembur', function (Blueprint $table) {
            $table->time('jam_masuk_sesi_4')->nullable()->after('jam_keluar_sesi_3');
            $table->time('jam_keluar_sesi_4')->nullable()->after('jam_masuk_sesi_4');
            $table->time('jam_masuk_sesi_5')->nullable()->after('jam_keluar_sesi_4');
            $table->time('jam_keluar_sesi_5')->nullable()->after('jam_masuk_sesi_5');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('operator_gtm_lembur', function (Blueprint $table) {
            $table->dropColumn('jam_masuk_sesi_4');
            $table->dropColumn('jam_keluar_sesi_4');
            $table->dropColumn('jam_masuk_sesi_5');
            $table->dropColumn('jam_keluar_sesi_5');
        });
    }
};

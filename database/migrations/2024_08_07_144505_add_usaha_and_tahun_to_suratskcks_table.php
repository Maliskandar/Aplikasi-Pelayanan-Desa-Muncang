<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('suratskcks', function (Blueprint $table) {
            $table->string('usaha')->after('keperluan'); // Tambahkan kolom usaha setelah kolom keperluan
            $table->integer('tahun')->after('usaha');   // Tambahkan kolom tahun setelah kolom usaha
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('suratskcks', function (Blueprint $table) {
            $table->dropColumn('usaha');
            $table->dropColumn('tahun');
        });
    }
};
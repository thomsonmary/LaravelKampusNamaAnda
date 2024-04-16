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
        Schema::table('relations', function (Blueprint $table) {
            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('dosen_id')->references('id')->on('dosens')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('matakuliah_id')->references('id')->on('matakuliahs')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('relations', function (Blueprint $table) {
            $table->dropForeign('relations_mahasiswa_id_foreign');
            $table->dropForeign('relations_dosens_id_foreign');
            $table->dropForeign('relations_matakuliah_id_foreign');
        });
}
};

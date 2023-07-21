<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviewer_bab3', function (Blueprint $table) {
            $table->id();

            $table->longText('deskripsi_singkat_kesiapan_sdm_pt')->nullable();
            $table->longText('deskripsi_singkat_kesiapan_sdm_mitra')->nullable();
            
            $table->longText('jumlah_dosen_terlibat_pt')->nullable();
            $table->longText('jumlah_dosen_terlibat_mitra')->nullable();

            $table->longText('file_data_dosen_terlibat_pt')->nullable();
            $table->longText('file_data_dosen_terlibat_mitra')->nullable();

            $table->longText('deskripsi_singkat_pt')->nullable();
            $table->longText('deskripsi_singkat_mitra')->nullable();

            $table->longText('file_lampiran_sarana_prasarana_pt')->nullable();
            $table->longText('file_lampiran_sarana_prasarana_mitra')->nullable();

            $table->longText('status_proposal')->nullable();
            $table->longText('komentar_bab3')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviewer_bab3');
    }
};

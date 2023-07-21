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
        Schema::create('reviewer_bab2', function (Blueprint $table) {
            $table->id();

            $table->longText('ringkasan_mou')->nullable();
            $table->longText('file_mou')->nullable();
            $table->longText('no_moa')->nullable();
            $table->longText('deskripsi_singkat_moa')->nullable();
            $table->longText('tanggal_dimulai_moa')->nullable();
            $table->longText('tanggal_berakhir_moa')->nullable();
            $table->longText('file_moa')->nullable();
            $table->longText('misi_program_kerjasama')->nullable();
            $table->longText('target_program_kerjasama')->nullable();
            $table->longText('alasan_pemilihan_mitra')->nullable();
            $table->longText('prinsip_kerjasama')->nullable();
            $table->longText('manfaat_kerjasama')->nullable();
            $table->longText('tantangan_pelaksanaan_kerjasama')->nullable();
            $table->longText('kepemilikan_hak_cipta_paten')->nullable();
            $table->longText('mekanisme_resiprokal')->nullable();
            $table->longText('keberlanjutan_kerjsama')->nullable();
            $table->longText('hak_dan_kewajiban')->nullable();
            $table->longText('hak_tercantum')->nullable();

            $table->longText('status_proposal')->nullable();
            $table->longText('komentar_bab2')->nullable();

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
        Schema::dropIfExists('reviewer_bab2');
    }
};

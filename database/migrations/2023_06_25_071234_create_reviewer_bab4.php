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
        Schema::create('reviewer_bab4', function (Blueprint $table) {
            $table->id();
            $table->longText('rencana_pelaksanaan_pembelajaran')->nullable();
            $table->longText('scan_desain_kurikulum_pt')->nullable();
            $table->longText('scan_desain_kurikulum_mitra')->nullable();
            $table->longText('scan_desain_kurikulum_gabungan')->nullable();
            $table->longText('jenis_kerjasama')->nullable();
            $table->longText('jumlah_ijazah_terbit')->nullable();
            $table->longText('nama_ttd_ijazah_pt')->nullable();
            $table->longText('nama_ttd_ijazah_mitra')->nullable();
            $table->longText('jabatan_ttd_ijazah_pt')->nullable();
            $table->longText('jabatan_ttd_ijazah_mitra')->nullable();
            $table->longText('kriteria_calon_mahasiswa')->nullable();
            $table->longText('proses_seleksi')->nullable();
            $table->longText('skema_pembiayaan')->nullable();
            $table->longText('file_penjadwalan_kerjasama')->nullable();
            $table->longText('file_skpi')->nullable();
            $table->longText('keberlanjutan_studi_lanjut')->nullable();
            $table->longText('studi_lanjut_moa');
            $table->longText('status_proposal')->nullable();
            $table->longText('komentar_bab4')->nullable();
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
        Schema::dropIfExists('reviewer_bab4');
    }
};

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
        Schema::create('bab4', function (Blueprint $table) {
            $table->id();

            $table->string('rencana_pelaksanaan_pembelajaran')->nullable();
            $table->string('scan_desain_kurikulum_pt')->nullable();
            $table->string('scan_desain_kurikulum_mitra')->nullable();
            $table->string('scan_desain_kurikulum_gabungan')->nullable();
            $table->string('jenis_kerjasama')->nullable();
            $table->string('jumlah_ijazah_terbit')->nullable();
            $table->string('nama_ttd_ijazah_pt')->nullable();
            $table->string('nama_ttd_ijazah_mitra')->nullable();
            $table->string('jabatan_ttd_ijazah_pt')->nullable();
            $table->string('jabatan_ttd_ijazah_mitra')->nullable();
            $table->string('kriteria_calon_mahasiswa')->nullable();
            $table->string('proses_seleksi')->nullable();
            $table->string('skema_pembiayaan')->nullable();
            $table->string('file_penjadwalan_kerjasama')->nullable();
            $table->string('file_skpi')->nullable();
            $table->string('keberlanjutan_studi_lanjut')->nullable();
            $table->enum('studi_lanjut_moa', ['0', '1']);

            $table->timestamps();
        });

        Schema::table('proposal', function(Blueprint $table){
            $table->dropColumn('bab4');
            $table->foreignId('id_bab4')->nullable() ->references('id')->on('bab4');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bab4');
    }
};

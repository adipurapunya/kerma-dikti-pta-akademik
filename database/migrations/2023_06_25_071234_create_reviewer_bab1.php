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
        Schema::create('reviewer_bab1', function (Blueprint $table) {
            $table->id();
            $table->longText('nama_pt')->nullable();
            $table->longText('alamat_pt')->nullable();
            $table->longText('ijin_operasional_pt')->nullable();
            $table->longText('scan_ijin_operasional_pt')->nullable();

            $table->longText('status_akreditasi_institusi')->nullable();
            $table->longText('status_akreditasi_institusi_mitra')->nullable();
            $table->longText('akreditasi_prodi')->nullable();
            $table->longText('akreditasi_prodi_mitra')->nullable();
            $table->longText('negara_mitra')->nullable();

            $table->longText('scan_status_akreditasi_institusi')->nullable();
            $table->longText('nama_pt_mitra')->nullable();
            $table->longText('alamat_pt_mitra')->nullable();
            $table->longText('ijin_operasional_pt_mitra')->nullable();
            $table->longText('scan_ijin_operasional_pt_mitra')->nullable();
            
            $table->longText('scan_status_akreditasi_institusi_mitra')->nullable();
            
            $table->longText('peringkat_internasional_mitra')->nullable();
            $table->longText('nama_prodi')->nullable();
            $table->longText('nama_prodi_mitra')->nullable();
            
            $table->longText('scan_sk_akreditasi_prodi')->nullable();
            $table->longText('scan_sk_akreditasi_prodi_mitra')->nullable();
            $table->longText('scan_ijin_operasional_prodi')->nullable();
            $table->longText('scan_ijin_operasional_prodi_mitra')->nullable();
            $table->longText('proposal_usulan_kerjsama')->nullable();

            $table->longText('status_proposal')->nullable();
            $table->longText('komentar_bab1')->nullable();

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
        Schema::dropIfExists('reviewer_bab1');
    }
};

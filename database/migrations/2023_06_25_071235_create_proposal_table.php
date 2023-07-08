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
        Schema::create('proposal', function (Blueprint $table) {
            $table->id();
            $table->string('judul')->nullable();
            $table->date('tanggal_pengajuan')->nullable();
            $table->string('status_pengisian')->nullable();
            $table->string('status_berkas')->nullable();
            $table->string('pt_mitra_negeri')->nullable();
            $table->string('prodi_pt_mitra_negeri')->nullable();
            //---
            $table->string('jenis_kerjasama')->nullable();
            $table->string('prodi_pt_dalam_negeri')->nullable();
            $table->string('nama_universitas')->nullable();
            $table->string('bab1')->nullable();
            $table->string('bab2')->nullable();
            $table->string('bab3')->nullable();
            $table->string('bab4')->nullable();
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
        Schema::dropIfExists('proposal');
    }
};

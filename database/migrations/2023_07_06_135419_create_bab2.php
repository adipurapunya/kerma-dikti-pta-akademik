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
        Schema::create('bab2', function (Blueprint $table) {
            $table->id();
            $table->string('ringkasan_mou')->nullable();
            $table->string('file_mou')->nullable();
            $table->string('no_moa')->nullable();
            $table->string('deskripsi_singkat_moa')->nullable();
            $table->date('tanggal_dimulai_moa')->nullable();
            $table->date('tanggal_berakhir_moa')->nullable();
            $table->string('file_moa')->nullable();
            $table->string('misi_program_kerjasama')->nullable();
            $table->string('target_program_kerjasama')->nullable();
            $table->string('alasan_pemilihan_mitra')->nullable();
            $table->string('prinsip_kerjasama')->nullable();
            $table->string('manfaat_kerjasama')->nullable();
            $table->string('tantangan_pelaksanaan_kerjasama')->nullable();
            $table->string('kepemilikan_hak_cipta_paten')->nullable();
            $table->string('mekanisme_resiprokal')->nullable();
            $table->string('keberlanjutan_kerjsama')->nullable();
            $table->string('hak_dan_kewajiban')->nullable();
            $table->enum('hak_tercantum', ['0', '1'])->nullable();
            $table->timestamps();
        });

        Schema::table('proposal', function(Blueprint $table){
            $table->dropColumn('bab2');
            $table->foreignId('id_bab2')->nullable() ->references('id')->on('bab2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bab2');
    }
};

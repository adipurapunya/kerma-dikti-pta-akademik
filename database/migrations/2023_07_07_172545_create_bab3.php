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
        Schema::create('bab3', function (Blueprint $table) {
            $table->id();
            
            $table->longText('deskripsi_singkat_kesiapan_sdm_pt')->nullable();
            $table->longText('deskripsi_singkat_kesiapan_sdm_mitra')->nullable();
            
            $table->string('jumlah_dosen_terlibat_pt')->nullable();
            $table->string('jumlah_dosen_terlibat_mitra')->nullable();

            $table->string('file_data_dosen_terlibat_pt')->nullable();
            $table->string('file_data_dosen_terlibat_mitra')->nullable();

            $table->longText('deskripsi_singkat_pt')->nullable();
            $table->longText('deskripsi_singkat_mitra')->nullable();

            $table->string('file_lampiran_sarana_prasarana_pt')->nullable();
            $table->string('file_lampiran_sarana_prasarana_mitra')->nullable();

            $table->timestamps();
        });

        Schema::table('proposal', function(Blueprint $table){
            $table->dropColumn('bab3');
            $table->foreignId('id_bab3')->nullable() ->references('id')->on('bab3');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bab3');
    }
};

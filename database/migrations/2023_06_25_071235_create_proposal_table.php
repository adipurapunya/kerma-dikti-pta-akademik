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

            $table->string('reviewer1')->nullable();
            $table->string('reviewer2')->nullable();

            $table->string('grant_by')->nullable();
            $table->datetime('time_grant')->nullable();
            $table->longText('komentar')->nullable();

            //--

            $table->timestamps();
         });

        Schema::table('reviewer_bab1', function(Blueprint $table){
            $table->foreignId('id_proposal')->nullable() ->references('id')->on('proposal');
        });
        Schema::table('reviewer_bab2', function(Blueprint $table){
            $table->foreignId('id_proposal')->nullable() ->references('id')->on('proposal');
        });
        Schema::table('reviewer_bab3', function(Blueprint $table){
            $table->foreignId('id_proposal')->nullable() ->references('id')->on('proposal');
        });
        Schema::table('reviewer_bab4', function(Blueprint $table){
            $table->foreignId('id_proposal')->nullable() ->references('id')->on('proposal');
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

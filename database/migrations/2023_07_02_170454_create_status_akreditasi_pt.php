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
        Schema::create('status_akreditasi_pt', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->timestamps();
        });

        Schema::table('bab1', function(Blueprint $table){
            $table->dropColumn('status_akreditasi_institusi');
            $table->dropColumn('status_akreditasi_institusi_mitra');
            $table->dropColumn('akreditasi_prodi');
            $table->dropColumn('akreditasi_prodi_mitra');

            $table->foreignId('id_status_akreditasi_institusi')->nullable() ->references('id')->on('status_akreditasi_pt');
            $table->foreignId('id_status_akreditasi_institusi_mitra')->nullable() ->references('id')->on('status_akreditasi_pt');
            $table->foreignId('id_akreditasi_prodi')->nullable() ->references('id')->on('status_akreditasi_pt');
            $table->foreignId('id_akreditasi_prodi_mitra')->nullable() ->references('id')->on('status_akreditasi_pt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('status_akreditasi_pt');
    }
};

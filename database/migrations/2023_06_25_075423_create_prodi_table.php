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
        Schema::create('prodi', function (Blueprint $table) {
            $table->id();
            $table->string('universitas')->nullable();;
            $table->string('kode_prodi')->nullable();;
            $table->string('nama_prodi')->nullable();;
            $table->timestamps();
        });

        Schema::table('prodi', function(Blueprint $table){
            $table->dropColumn('universitas');
            $table->foreignId('id_universitas')->nullable() ->references('id')->on('universitas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prodi');
    }
};

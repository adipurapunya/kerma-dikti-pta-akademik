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
        Schema::create('daftar_negara', function (Blueprint $table) {
            $table->id();
            $table->string('iso', 2)->nullable();
            $table->string('name', 80)->nullable();
            $table->string('nicename', 80)->nullable();
            $table->string('iso3',3)->nullable();
            $table->integer('numcode')->nullable();
            $table->integer('phonecode')->nullable();
            $table->timestamps();
        });

        Schema::table('bab1', function(Blueprint $table){
            $table->dropColumn('negara_mitra');
            $table->foreignId('id_negara_mitra')->nullable() ->references('id')->on('daftar_negara');
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daftar_negara');
    }
};

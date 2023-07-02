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
        Schema::create('universitas', function (Blueprint $table) {
            $table->id();
            $table->string('kode_universitas')->nullable();
            $table->string('id_universitas')->nullable();
            $table->string('nama_universitas')->nullable();
            $table->string('telepon')->nullable();
            $table->string('nama_pembina')->nullable();
            $table->string('bentuk_pendidikan')->nullable();
            $table->string('website')->nullable();
            $table->string('alamat')->nullable();
            $table->string('kota_kabupaten')->nullable();
            $table->string('propinsi')->nullable();
            $table->timestamps();
        });
        Schema::table('users', function(Blueprint $table){
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
        Schema::dropIfExists('universitas');
    }
};

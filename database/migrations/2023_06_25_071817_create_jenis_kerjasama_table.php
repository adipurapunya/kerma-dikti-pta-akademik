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
        Schema::create('jenis_kerjasama', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_kerjasama')->nullable();
            $table->timestamps();
        });

        Schema::table('proposal', function(Blueprint $table){
            $table->dropColumn('jenis_kerjasama');
            $table->foreignId('id_jenis_kerjasama')->nullable() ->references('id')->on('jenis_kerjasama');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jenis_kerjasama');
    }
};

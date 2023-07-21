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
        Schema::create('level_user', function (Blueprint $table) {
            $table->id();
            $table->string('level');
            $table->timestamps();
        });

        Schema::table('users', function(Blueprint $table){
            $table->dropColumn('level');
            $table->foreignId('id_level')->nullable() ->references('id')->on('level_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('level_user');
    }
};

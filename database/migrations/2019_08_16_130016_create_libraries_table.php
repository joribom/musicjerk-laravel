<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libraries', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('album_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('libraries', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->primary(array('user_id', 'album_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libraries');
    }
}

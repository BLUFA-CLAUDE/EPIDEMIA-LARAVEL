<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePointSurveillancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('point_surveillances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('cordonnees');
            $table->integer('zone_id')->unsigned();
            $table->foreign('zone_id')->references('id')->on('zones');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('point_surveillances');
    }
}

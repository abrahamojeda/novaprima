<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrindsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grinds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tomatoe_lot');
            $table->foreign('tomatoe_lot')->references('lot')->on('tomatoes');
            $table->string('grind_hour');
            $table->string('rest_hour');
            $table->unsignedInteger('responsable_id');
            $table->foreign('responsable_id')->references('id')->on('responsables');
            $table->string('observations');
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
        Schema::dropIfExists('grinds');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoneysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('honeys', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantity')->unsigned();
            $table->string('lot');
            $table->string('observations');
            $table->unsignedInteger('responsable_id'); //pendiente de hacer tabla
            $table->foreign('responsable_id')->references('id')->on('responsables');
            $table->unsignedInteger('provider_id');   //pendiente de hacer tabla
            $table->foreign('provider_id')->references('id')->on('providers');
            $table->boolean('colour');
            $table->boolean('smell');
            $table->boolean('flavor');
            $table->boolean('texture');
            $table->boolean('aparience');
            $table->boolean('hygiene');
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
        Schema::dropIfExists('honeys');
    }
}

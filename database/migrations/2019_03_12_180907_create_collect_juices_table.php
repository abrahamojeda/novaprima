<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectJuicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collect_juices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('collect_hour');
            $table->string('collect_liters');
            $table->string('tomatoe_lot');
            $table->foreign('tomatoe_lot')->references('lot')->on('tomatoes');
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
        Schema::dropIfExists('collect_juices');
    }
}

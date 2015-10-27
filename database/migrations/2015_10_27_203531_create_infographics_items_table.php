<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfographicsItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infographics_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('infographic_id');
            $table->string('type');
            $table->string('title');
            $table->text('media');
            $table->text('text');
            $table->boolean('deleted');
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
        Schema::drop('infographics_items');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfographicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infographics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('desk');
            $table->string('title');
            $table->string('lead');
            $table->string('slug');
            $table->integer('layout');
            $table->integer('organization');
            $table->text('custom_css');
            $table->text('custom_js');
            $table->integer('created_by');
            $table->integer('edited_by');
            $table->boolean('published');
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
        Schema::drop('infographics');
    }
}

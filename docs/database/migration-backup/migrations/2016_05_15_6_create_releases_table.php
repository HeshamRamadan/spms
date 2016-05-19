<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReleasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('releases', function (Blueprint $table) {
        	$table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('desc');
            $table->text('features');
            $table->integer('status');
            $table->integer('p_id')->unsigned();
        	$table->foreign('p_id')->references('id')->on('projects')->onDelete('cascade');
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
        Schema::drop('releases');
    }
}

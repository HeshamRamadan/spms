<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
        	$table->engine = 'InnoDB';
        	$table->increments('id')->unsigned();
            $table->string('title');
            $table->text('desc');
			$table->dateTime('start_date');
			$table->dateTime('end_date');
			$table->integer('status');
			$table->integer('developer_id')->unsigned();
        	$table->foreign('developer_id')->references('id')->on('developers');
        	$table->integer('release_id')->unsigned();
        	$table->foreign('release_id')->references('id')->on('releases');
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
        Schema::drop('tasks');
    }
}

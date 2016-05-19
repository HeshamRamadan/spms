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
			$table->integer('dev_id')->unsigned();
        	$table->foreign('dev_id')->references('user_id')->on('developers');
        	$table->integer('rel_id')->unsigned();
        	$table->foreign('rel_id')->references('id')->on('releases');
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

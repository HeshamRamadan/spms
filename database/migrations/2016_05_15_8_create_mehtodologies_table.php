<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMehtodologiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mehtodologies', function (Blueprint $table) {
        	$table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->timestamps();
            $table->integer('p_id')->unsigned();
            $table->foreign('p_id')->references('id')->on('projects')->onDelete('cascade');
            
            
            
        });
        
        	Schema::table('mehtodologies', function($table) {
        		
        	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mehtodologies');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevelopersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('developers', function (Blueprint $table) {
        	$table->engine = 'InnoDB';
        	$table->increments('id')->unsigned();
        	$table->integer('user_id')->unsigned();
        	$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        	$table->string('prog_langs');
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
        Schema::drop('developers');
    }
}

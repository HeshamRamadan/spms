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
        	$table->integer('user_id')->unsigned();
        	$table->string('prog_lang');
            $table->timestamps();
            
            
        });
        	Schema::table('developers', function($table) {
        		$table->foreign('user_id')->references('id')->on('users');
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

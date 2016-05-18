<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
        	$table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('desc');
            $table->integer('created_by')->unsigned();
            $table->foreign('created_by')->references('id')->on('users');
            $table->integer('assigned_to')->unsigned();
            $table->foreign('assigned_to')->references('id')->on('developers');
            $table->integer('tested_by')->unsigned();
            $table->foreign('tested_by')->references('id')->on('testers');
            $table->integer('rel_id')->unsigned();
            $table->foreign('rel_id')->references('id')->on('releases');
            $table->integer('progress');
            $table->string('screenshot');
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
        Schema::drop('issues');
    }
}

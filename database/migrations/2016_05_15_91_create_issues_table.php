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
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('developer_id')->unsigned();
            $table->foreign('developer_id')->references('id')->on('developers');
            $table->integer('tester_id')->unsigned();
            $table->foreign('tester_id')->references('id')->on('testers');
            $table->integer('release_id')->unsigned();
            $table->foreign('release_id')->references('id')->on('releases')->onDelete('cascade');
            $table->integer('progress');
            $table->string('screenshot');
            $table->integer('issue_number')->default(1);
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

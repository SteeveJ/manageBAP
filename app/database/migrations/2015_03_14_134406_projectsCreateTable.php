<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProjectsCreateTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('projects', function(Blueprint $table){
            $table->increments('id');
            $tabe->
            $table->string('name');
            $table->text('description');
            $table->boolean('validated');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('projects');
    }

}

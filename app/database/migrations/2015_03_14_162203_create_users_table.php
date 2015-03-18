<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('users', function($table) {
            $table->increments('id');
            $table->string('firstname', 50);
            $table->string('lastname', 50);
            $table->string('rs');
            $table->string('email', 100);
            $table->text('password');
            $table->string('role_id');
            $table->integer('status');
        });
        DB::table('users')->insert(
            [
                'firstname' => 'Jerent',
                'lastname' => 'Steeve',
                'rs' => 'dev',
                'email' => 'xxx@xxxx.com',
                'password' => Hash::make('password'),
                'role_id' => 1,
                'status' => 1,
            ]
        );

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('users');
	}

}

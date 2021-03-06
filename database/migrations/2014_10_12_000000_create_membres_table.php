<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('membres', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('password', 60);
			$table->string('nom');
			$table->string('prenom');
			$table->string('email')->unique();
			$table->string('tel')->nullable();
			$table->string('cin')->nullable();
			$table->date('date_naissance');
			$table->integer('rank')->unsigned()->default('3');
			$table->boolean('is_verified')->default(0);
			$table->timestamps();
			$table->rememberToken();
		});
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

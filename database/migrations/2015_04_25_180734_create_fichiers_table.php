<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichiersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fichiers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('url');
			$table->boolean('visible');
			$table->string('nom');
			$table->integer('id_membre')->unsigned()->index();
			$table->timestamps();
			$table->string('type')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fichiers');
	}

}

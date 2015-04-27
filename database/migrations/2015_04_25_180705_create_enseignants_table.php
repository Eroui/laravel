<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnseignantsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('enseignants', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_membre')->unsigned()->index();
			$table->string('grade', 45);
			$table->string('matiere_de_specialite')->nullable();
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
		Schema::drop('enseignants');
	}

}

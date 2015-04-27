<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscriptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inscriptions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_etudiant')->unsigned()->index();
			$table->integer('id_module')->unsigned()->index();
			$table->string('group', 25);
			$table->string('annee');
			$table->integer('etat_validation')->default('0');
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
		Schema::drop('inscriptions');
	}

}

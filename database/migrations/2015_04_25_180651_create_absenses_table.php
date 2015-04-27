<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsensesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('absenses', function(Blueprint $table)
		{
			$table->timestamps();
			$table->integer('id_etudiant')->index();
			$table->integer('id_intervention')->unsigned()->index();
			$table->date('date');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('absenses');
	}

}

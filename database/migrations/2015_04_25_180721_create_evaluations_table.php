<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('evaluations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_etudiant')->unsigned()->index();
			$table->integer('id_module')->unsigned()->index();
			$table->float('note')->default('99');
			$table->enum('type', array('1', '2', '3', '4'));
			$table->date('date');
			$table->string('salle');
			$table->integer('coeff');
			$table->timestamp('timestamps');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('evaluations');
	}

}

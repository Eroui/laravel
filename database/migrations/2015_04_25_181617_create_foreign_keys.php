<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('enseignants', function(Blueprint $table) {
			$table->foreign('id_membre')->references('id')->on('membres')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('evaluations', function(Blueprint $table) {
			$table->foreign('id_etudiant')->references('id')->on('etudiants')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('evaluations', function(Blueprint $table) {
			$table->foreign('id_module')->references('id_module')->on('modules')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('inscriptions', function(Blueprint $table) {
			$table->foreign('id_etudiant')->references('id')->on('etudiants')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('inscriptions', function(Blueprint $table) {
			$table->foreign('id_module')->references('id_module')->on('modules')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('prerequis', function(Blueprint $table) {
			$table->foreign('id_module_base')->references('id_module')->on('modules')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('prerequis', function(Blueprint $table) {
			$table->foreign('id_module_prereq')->references('id_module_base')->on('prerequis')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('interventions', function(Blueprint $table) {
			$table->foreign('id_module')->references('id_module')->on('modules')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('interventions', function(Blueprint $table) {
			$table->foreign('id_ens')->references('id')->on('enseignants')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		
		Schema::table('absenses', function(Blueprint $table) {
			$table->foreign('id_intervention')->references('id')->on('interventions')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('fichiers', function(Blueprint $table) {
			$table->foreign('id_membre')->references('id')->on('membres')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}

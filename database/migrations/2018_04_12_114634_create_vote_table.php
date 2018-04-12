<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVoteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vote', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->integer('ID_Compte')->index('FK_Vote_ID_Compte');
			$table->integer('ID_TypeVote')->index('FK_Vote_ID_TypeVote');
			$table->integer('ID_Manifestation')->index('FK_Vote_ID_Manifestation');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vote');
	}

}

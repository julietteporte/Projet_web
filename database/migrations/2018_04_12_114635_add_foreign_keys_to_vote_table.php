<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVoteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('vote', function(Blueprint $table)
		{
			$table->foreign('ID_Compte', 'FK_Vote_ID_Compte')->references('ID')->on('compte')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ID_Manifestation', 'FK_Vote_ID_Manifestation')->references('ID')->on('manifestation')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ID_TypeVote', 'FK_Vote_ID_TypeVote')->references('ID')->on('typevote')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('vote', function(Blueprint $table)
		{
			$table->dropForeign('FK_Vote_ID_Compte');
			$table->dropForeign('FK_Vote_ID_Manifestation');
			$table->dropForeign('FK_Vote_ID_TypeVote');
		});
	}

}

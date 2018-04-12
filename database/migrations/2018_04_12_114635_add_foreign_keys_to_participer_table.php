<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToParticiperTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('participer', function(Blueprint $table)
		{
			$table->foreign('ID_Compte', 'FK_participer_ID_Compte')->references('ID')->on('compte')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ID_Manifestation', 'FK_participer_ID_Manifestation')->references('ID')->on('manifestation')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('participer', function(Blueprint $table)
		{
			$table->dropForeign('FK_participer_ID_Compte');
			$table->dropForeign('FK_participer_ID_Manifestation');
		});
	}

}

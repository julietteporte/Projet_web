<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToManifestationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('manifestation', function(Blueprint $table)
		{
			$table->foreign('ID_Compte', 'FK_Manifestation_ID_Compte')->references('ID')->on('compte')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ID_EtatValidite', 'FK_Manifestation_ID_EtatValidite')->references('ID')->on('etatvalidite')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ID_Frequence', 'FK_Manifestation_ID_Frequence')->references('ID')->on('frequence')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('manifestation', function(Blueprint $table)
		{
			$table->dropForeign('FK_Manifestation_ID_Compte');
			$table->dropForeign('FK_Manifestation_ID_EtatValidite');
			$table->dropForeign('FK_Manifestation_ID_Frequence');
		});
	}

}

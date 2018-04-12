<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCommandeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('commande', function(Blueprint $table)
		{
			$table->foreign('ID_Compte', 'FK_Commande_ID_Compte')->references('ID')->on('compte')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ID_EtatVente', 'FK_Commande_ID_EtatVente')->references('ID')->on('etatvente')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ID_MoyenPaiement', 'FK_Commande_ID_MoyenPaiement')->references('ID')->on('moyenpaiement')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('commande', function(Blueprint $table)
		{
			$table->dropForeign('FK_Commande_ID_Compte');
			$table->dropForeign('FK_Commande_ID_EtatVente');
			$table->dropForeign('FK_Commande_ID_MoyenPaiement');
		});
	}

}

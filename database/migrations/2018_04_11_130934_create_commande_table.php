<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommandeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('commande', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->date('DateCommande');
			$table->time('HeureCommande');
			$table->integer('Reference')->unique('Reference');
			$table->integer('ID_EtatVente')->index('FK_Commande_ID_EtatVente');
			$table->integer('ID_Compte')->index('FK_Commande_ID_Compte');
			$table->integer('ID_MoyenPaiement')->index('FK_Commande_ID_MoyenPaiement');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('commande');
	}

}

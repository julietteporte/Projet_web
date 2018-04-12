<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCommandeligneTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('commandeligne', function(Blueprint $table)
		{
			$table->foreign('ID_Commande', 'FK_CommandeLigne_ID_Commande')->references('ID')->on('commande')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ID_Produit', 'FK_CommandeLigne_ID_Produit')->references('ID')->on('produit')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('commandeligne', function(Blueprint $table)
		{
			$table->dropForeign('FK_CommandeLigne_ID_Commande');
			$table->dropForeign('FK_CommandeLigne_ID_Produit');
		});
	}

}

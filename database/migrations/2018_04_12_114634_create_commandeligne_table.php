<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommandeligneTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('commandeligne', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->integer('QuantiteProduit');
			$table->decimal('PrixUnitaire', 15, 3);
			$table->integer('ID_Produit')->index('FK_CommandeLigne_ID_Produit');
			$table->integer('ID_Commande')->index('FK_CommandeLigne_ID_Commande');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('commandeligne');
	}

}

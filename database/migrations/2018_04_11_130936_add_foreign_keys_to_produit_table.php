<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProduitTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('produit', function(Blueprint $table)
		{
			$table->foreign('ID_Categorie', 'FK_Produit_ID_Categorie')->references('ID')->on('categorie')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ID_Disponibilite', 'FK_Produit_ID_Disponibilite')->references('ID')->on('disponibilite')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('produit', function(Blueprint $table)
		{
			$table->dropForeign('FK_Produit_ID_Categorie');
			$table->dropForeign('FK_Produit_ID_Disponibilite');
		});
	}

}

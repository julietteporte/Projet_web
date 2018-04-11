<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProduitTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produit', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->string('Intitule', 25);
			$table->string('Legende', 100)->nullable();
			$table->text('Description', 65535)->nullable();
			$table->decimal('Prix', 15, 3)->nullable();
			$table->boolean('Active')->default(0);
			$table->integer('ID_Disponibilite')->index('FK_Produit_ID_Disponibilite');
			$table->integer('ID_Categorie')->index('FK_Produit_ID_Categorie');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('produit');
	}

}

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
			$table->decimal('Prix', 15, 3);
			$table->char('Fichier')->nullable();
			$table->enum('Disponibilite', array('En stock','En cours de reapprovisionnement','Non disponible'))->default('En stock');
			$table->boolean('IsActive')->default(1);
			$table->integer('ID_Categorie')->index('FK_Produit_ID_Categorie');
			$table->timestamps();
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

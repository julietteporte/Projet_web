<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('compte', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->string('AdresseMail', 50)->nullable();
			$table->string('MotDePasse', 50)->nullable();
			$table->string('MotDePasseFacebook', 50)->nullable();
			$table->string('Nom', 25)->nullable();
			$table->string('Prenom', 25)->nullable();
			$table->date('DateInscription');
			$table->date('DateDerniereVisite');
			$table->char('Genre', 5);
			$table->boolean('Active')->default(0);
			$table->integer('ID_TypeCompte')->index('FK_Compte_ID_TypeCompte');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('compte');
	}

}

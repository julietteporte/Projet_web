<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManifestationTable extends Migration {

	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('manifestation', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->string('Intitule', 50);
			$table->text('Description', 65535)->nullable();
			$table->date('DateManifestation');
			$table->text('Lieu', 65535);
			$table->decimal('Prix', 15, 3)->default(0.000);
			$table->text('Frequence', 65535);
			$table->char('Fichier')->nullable();
			$table->boolean('IsActive')->default(1);
			$table->enum('EtatValidite', array('Valide','En cours de traitement','Rejete'))->default('Valide');
			$table->integer('ID_Compte')->index('FK_Manifestation_ID_Compte');
		});
	}


	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::drop('manifestation');
	}

}

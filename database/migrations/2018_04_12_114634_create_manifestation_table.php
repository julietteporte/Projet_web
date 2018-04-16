<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
			$table->date('DateManifestion')->nullable();
			$table->decimal('Prix', 15, 3)->default(0.000);
			$table->boolean('IsActive')->default(0);
			$table->enum('EtatValidite', array('Valide','En cours de traitement','Rejete'))->default('En cours de traitement');
			$table->text('Frequence', 65535);
			$table->integer('ID_Compte')->index('FK_Manifestation_ID_Compte');
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
		Schema::drop('manifestation');
	}

}

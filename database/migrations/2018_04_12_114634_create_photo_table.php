<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePhotoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('photo', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->string('Intitule', 50);
			$table->string('Description', 100)->nullable();
			$table->string('Fichier');
			$table->boolean('IsActive')->default(0);
			$table->integer('ID_Manifestation')->index('FK_Photo_ID_Manifestation');
			$table->integer('ID_Compte')->index('FK_Photo_ID_Compte');
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
		Schema::drop('photo');
	}

}

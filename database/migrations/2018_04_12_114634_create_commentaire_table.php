<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentaireTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('commentaire', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->text('Contenu');
			$table->boolean('IsActive')->default(0);
			$table->integer('ID_Compte')->index('FK_Commentaire_ID_Compte');
			$table->integer('ID_Photo')->index('FK_Commentaire_ID_Photo');
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
		Schema::drop('commentaire');
	}

}

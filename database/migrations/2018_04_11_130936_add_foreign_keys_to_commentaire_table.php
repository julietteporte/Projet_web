<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCommentaireTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('commentaire', function(Blueprint $table)
		{
			$table->foreign('ID_Compte', 'FK_Commentaire_ID_Compte')->references('ID')->on('compte')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ID_Photo', 'FK_Commentaire_ID_Photo')->references('ID')->on('photo')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('commentaire', function(Blueprint $table)
		{
			$table->dropForeign('FK_Commentaire_ID_Compte');
			$table->dropForeign('FK_Commentaire_ID_Photo');
		});
	}

}

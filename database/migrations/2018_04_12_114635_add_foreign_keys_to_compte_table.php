<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCompteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('compte', function(Blueprint $table)
		{
			$table->foreign('ID_TypeCompte', 'FK_Compte_ID_TypeCompte')->references('ID')->on('typecompte')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('compte', function(Blueprint $table)
		{
			$table->dropForeign('FK_Compte_ID_TypeCompte');
		});
	}

}

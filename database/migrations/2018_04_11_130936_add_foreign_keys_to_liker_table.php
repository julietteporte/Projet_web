<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLikerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('liker', function(Blueprint $table)
		{
			$table->foreign('ID_Compte', 'FK_liker_ID_Compte')->references('ID')->on('compte')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ID_Photo', 'FK_liker_ID_Photo')->references('ID')->on('photo')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('liker', function(Blueprint $table)
		{
			$table->dropForeign('FK_liker_ID_Compte');
			$table->dropForeign('FK_liker_ID_Photo');
		});
	}

}

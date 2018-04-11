<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPhotoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('photo', function(Blueprint $table)
		{
			$table->foreign('ID_Compte', 'FK_Photo_ID_Compte')->references('ID')->on('compte')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ID_Manifestation', 'FK_Photo_ID_Manifestation')->references('ID')->on('manifestation')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('photo', function(Blueprint $table)
		{
			$table->dropForeign('FK_Photo_ID_Compte');
			$table->dropForeign('FK_Photo_ID_Manifestation');
		});
	}

}

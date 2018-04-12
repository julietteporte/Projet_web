<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToImageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('image', function(Blueprint $table)
		{
			$table->foreign('ID_Produit', 'FK_Image_ID_Produit')->references('ID')->on('produit')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('image', function(Blueprint $table)
		{
			$table->dropForeign('FK_Image_ID_Produit');
		});
	}

}

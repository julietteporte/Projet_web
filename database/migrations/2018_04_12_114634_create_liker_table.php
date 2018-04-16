<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLikerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('liker', function(Blueprint $table)
		{
			$table->integer('ID_Compte');
			$table->integer('ID_Photo')->index('FK_liker_ID_Photo');
			$table->primary(['ID_Compte','ID_Photo']);
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
		Schema::drop('liker');
	}

}

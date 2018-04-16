<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParticiperTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('participer', function(Blueprint $table)
		{
			$table->integer('ID_Compte');
			$table->integer('ID_Manifestation')->index('FK_participer_ID_Manifestation');
			$table->primary(['ID_Compte','ID_Manifestation']);
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
		Schema::drop('participer');
	}

}

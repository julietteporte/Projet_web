<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('compte', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
			$table->string('email')->unique();
			$table->string('password');
			$table->char('genre', 5)->nullable();
			$table->boolean('isActive')->default(0);
			$table->integer('ID_TypeCompte')->index('FK_Compte_ID_TypeCompte')->default(0);
            $table->timestamps();
            $table->rememberToken();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('compte');
	}

}

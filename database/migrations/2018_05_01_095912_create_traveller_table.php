<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTravellerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('traveller', function(Blueprint $table)
		{
			$table->integer('kodeTraveller', true);
			$table->integer('kodePengguna')->index('kodePengguna');
			$table->integer('activityTraveller')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('traveller');
	}

}

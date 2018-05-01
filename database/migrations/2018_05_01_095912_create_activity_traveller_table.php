<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivityTravellerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activity_traveller', function(Blueprint $table)
		{
			$table->integer('activityTraveller', true);
			$table->integer('kodeTraveller')->nullable()->index('kodeTraveller');
			$table->string('activity', 191)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('activity_traveller');
	}

}

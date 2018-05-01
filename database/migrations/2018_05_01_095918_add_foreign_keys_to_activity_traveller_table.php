<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToActivityTravellerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('activity_traveller', function(Blueprint $table)
		{
			$table->foreign('kodeTraveller', 'activity_traveller_ibfk_1')->references('kodeTraveller')->on('traveller')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('activity_traveller', function(Blueprint $table)
		{
			$table->dropForeign('activity_traveller_ibfk_1');
		});
	}

}

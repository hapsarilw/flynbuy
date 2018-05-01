<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTravellerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('traveller', function(Blueprint $table)
		{
			$table->foreign('kodePengguna', 'traveller_ibfk_1')->references('kodePengguna')->on('pengguna')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('traveller', function(Blueprint $table)
		{
			$table->dropForeign('traveller_ibfk_1');
		});
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToActivityRequesterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('activity_requester', function(Blueprint $table)
		{
			$table->foreign('kodeRequester', 'activity_requester_ibfk_1')->references('kodeRequester')->on('requester')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('activity_requester', function(Blueprint $table)
		{
			$table->dropForeign('activity_requester_ibfk_1');
		});
	}

}

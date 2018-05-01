<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivityRequesterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activity_requester', function(Blueprint $table)
		{
			$table->integer('activityRequester', true);
			$table->integer('kodeRequester')->nullable()->index('kodeRequester');
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
		Schema::drop('activity_requester');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRequesterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('requester', function(Blueprint $table)
		{
			$table->integer('kodeRequester', true);
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
		Schema::drop('requester');
	}

}

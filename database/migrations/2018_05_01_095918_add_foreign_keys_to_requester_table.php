<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRequesterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('requester', function(Blueprint $table)
		{
			$table->foreign('kodePengguna', 'requester_ibfk_1')->references('kodePengguna')->on('pengguna')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('requester', function(Blueprint $table)
		{
			$table->dropForeign('requester_ibfk_1');
		});
	}

}

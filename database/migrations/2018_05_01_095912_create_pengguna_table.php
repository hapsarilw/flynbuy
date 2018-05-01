<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePenggunaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pengguna', function(Blueprint $table)
		{
			$table->integer('kodePengguna', true);
			$table->string('provinsi', 10)->nullable();
			$table->string('kota', 10)->nullable();
			$table->string('kecamatan', 10)->nullable();
			$table->string('kodePos', 5)->nullable();
			$table->string('noRek', 15)->nullable();
			$table->string('namaBank', 20)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pengguna');
	}

}

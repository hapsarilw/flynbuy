<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePegawaiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pegawai', function(Blueprint $table)
		{
			$table->integer('kodePegawai', true);
			$table->integer('idPTransaksi')->unsigned()->nullable()->index('idPTransaksi');
			$table->integer('idPCustServ')->unsigned()->nullable()->index('idPCustServ');
			$table->integer('idPKeuangan')->unsigned()->nullable()->index('idPKeuangan');
			$table->string('departemen', 20);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pegawai');
	}

}

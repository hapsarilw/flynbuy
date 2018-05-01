<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('idUsers');
			$table->integer('kodePegawai')->unsigned()->nullable();
			$table->string('departemen', 10)->nullable();
			$table->integer('idWallet')->unsigned();
			$table->integer('jumlah');
			$table->string('email', 191)->unique();
			$table->string('password', 10);
			$table->string('nama', 191);
			$table->string('noTelp', 15);
			$table->integer('kodePengguna')->unsigned()->nullable();
			$table->timestamps();
			$table->string('remember_token', 100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}

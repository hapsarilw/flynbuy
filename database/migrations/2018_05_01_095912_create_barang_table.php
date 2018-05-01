<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBarangTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('barang', function(Blueprint $table)
		{
			$table->integer('idBarang', true);
			$table->string('nama', 191);
			$table->integer('kodeRS')->unsigned()->nullable()->index('kodeRS');
			$table->integer('kodePO')->unsigned()->nullable()->index('kodePO');
			$table->integer('kodeRQ')->unsigned()->nullable()->index('kodeRQ');
			$table->binary('buktiPembayaran')->nullable();
			$table->float('berat', 10, 0)->nullable();
			$table->string('statusPecahBelah', 5)->nullable();
			$table->string('statusPenangananKhusus', 5)->nullable();
			$table->decimal('harga', 15);
			$table->float('panjang', 10, 0)->nullable();
			$table->float('lebar', 10, 0)->nullable();
			$table->binary('foto');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('barang');
	}

}

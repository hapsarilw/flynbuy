<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBarangTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('barang', function(Blueprint $table)
		{
			$table->foreign('kodeRS', 'barang_ibfk_1')->references('kodeRS')->on('b_readystock')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('kodePO', 'barang_ibfk_2')->references('kodePO')->on('b_preorder')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('kodeRQ', 'barang_ibfk_3')->references('kodeRQ')->on('b_request')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('barang', function(Blueprint $table)
		{
			$table->dropForeign('barang_ibfk_1');
			$table->dropForeign('barang_ibfk_2');
			$table->dropForeign('barang_ibfk_3');
		});
	}

}

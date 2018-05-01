<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPegawaiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pegawai', function(Blueprint $table)
		{
			$table->foreign('idPTransaksi', 'pegawai_ibfk_1')->references('idPTransaksi')->on('p_transaksi')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('idPTransaksi', 'pegawai_ibfk_2')->references('idPTransaksi')->on('p_transaksi')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('idPTransaksi', 'pegawai_ibfk_3')->references('idPTransaksi')->on('p_transaksi')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('idPCustServ', 'pegawai_ibfk_4')->references('idPCustServ')->on('p_custservice')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('idPKeuangan', 'pegawai_ibfk_5')->references('idPKeuangan')->on('p_keuangan')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pegawai', function(Blueprint $table)
		{
			$table->dropForeign('pegawai_ibfk_1');
			$table->dropForeign('pegawai_ibfk_2');
			$table->dropForeign('pegawai_ibfk_3');
			$table->dropForeign('pegawai_ibfk_4');
			$table->dropForeign('pegawai_ibfk_5');
		});
	}

}

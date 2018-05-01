<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('users', 'PagesController@users');

Route::get('sampleData', function(){
    DB::table('users')->insert([
        [
            'kodeRequest'   => '02',
            'kodeTraveller' => '06',

            'idWallet'      => '045',
            'jumlah'        => '103333',

            'email'         => 'p2@gmail.com',
            'password'      => '34555',
            'nama'          => 'pper',
            'noTelp'        => '5739',

            'provinsi'      => 'provA',
            'kota'          => 'kotaA',
            'kecamatan'     => 'kecC',
            'kodePos'       => '40123',

            'noRek'         => '0987 5678 9764',
            'namaBank'      => 'BBGD'
        ],
        [
            'kodeRequest'   => '034',
            'kodeTraveller' => '023',

            'idWallet'      => '087',
            'jumlah'        => '154267',

            'email'         => 'pirt@gmail.com',
            'password'      => '34555',
            'nama'          => 'pirt',
            'noTelp'        => '0975376345',

            'provinsi'      => 'provB',
            'kota'          => 'kotaD',
            'kecamatan'     => 'kecC',
            'kodePos'       => '40456',

            'noRek'         => '056 7454 8674',
            'namaBank'      => 'BGE'
        ],
        [
            'kodeRequest'   => '34',
            'kodeTraveller' => '32',

            'idWallet'      => '876',
            'jumlah'        => '453638',

            'email'         => '9872@gmail.com',
            'password'      => '781671',
            'nama'          => 'der',
            'noTelp'        => '0976 3822 83892',

            'provinsi'      => 'provA',
            'kota'          => 'kotaE',
            'kecamatan'     => 'kecC',
            'kodePos'       => '40123',

            'noRek'         => '098 678 764',
            'namaBank'      => 'BGF'
        ],
        [
            'kodeRequest'   => '07',
            'kodeTraveller' => '08',

            'idWallet'      => '045',
            'jumlah'        => '234567',

            'email'         => '456@gmail.com',
            'password'      => '34555',
            'nama'          => 'pper',
            'noTelp'        => '0876 6278 5436',

            'provinsi'      => 'provD',
            'kota'          => 'kotaO',
            'kecamatan'     => 'kecF',
            'kodePos'       => '7654',

            'noRek'         => '098 765 456',
            'namaBank'      => 'BBGD'
        ],

    ]);
});

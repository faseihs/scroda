<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CryptoCurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cryptocurrencies')->insert([
            'name'=>'Ethereum',
            'short'=>'ETH'
        ]);
        DB::table('cryptocurrencies')->insert([
            'name'=>'Litecoin',
            'short'=>'LTH'
        ]);
        DB::table('cryptocurrencies')->insert([
            'name'=>'Bitcoin',
            'short'=>'BTC'
        ]);
        DB::table('cryptocurrencies')->insert([
            'name'=>'UD Dollar',
            'short'=>'USD'
        ]);
    }
}

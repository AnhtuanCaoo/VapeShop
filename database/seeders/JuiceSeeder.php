<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class JuiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('juice')->insert([
            'juicename'=>'Pop ice watermelon',
            'number'=> '10',
            'image'=>'',
            'nicotin'=>'50',
            'flavor'=>'watermelon',
            'brand'=> 'pop ice',
            'price' => '320000',
            'Sell Price'=>'400000',
        ]);
    }
}

<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;


use Illuminate\Database\Seeder;

class Product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'product' => 'hogemin',
            'company' => 'hogemin',
             'cost' => 222
             'image' => 'OIP.jpg',

        ]);
    }
}
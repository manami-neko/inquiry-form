<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '商品Ａ',
        ];
        DB::table('items')->insert($param);
        $param = [
            'name' => '商品Ｂ'
        ];
        DB::table('items')->insert($param);
        $param = [
            'name' => '商品Ｃ'
        ];
        DB::table('items')->insert($param);
    }
}

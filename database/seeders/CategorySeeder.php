<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             DB::table('categories')->insert(['name' => 'Samsung']);
            DB::table('categories')->insert( ['name' => 'Vivo']);
            DB::table('categories')->insert(['name' => 'Iphone']);
            DB::table('categories')->insert(['name' => 'Xiaomi']);
            DB::table('categories')->insert(['name' => 'Nokia']);
            DB::table('categories')->insert(['name' => 'Vsmart']);
        
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PrecioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('precios')->insert([
            'type' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque, similique nobis illum, porro dicta explicabo veritatis rerum aut voluptas sapiente nisi minima odio!',
            'costo' => 8,
            'active' => true
        ]); 
        DB::table('precios')->insert([
            'type' => 'Loremoloremque, similique nobis illum, porro dicta explicabo aliquid soluta aspernatur, minus debitis ipsa excepturi veritatis rerum aut voluptas sapiente nisi minima odio!',
            'costo' => 10,
            'active' => true
        ]); 
        DB::table('precios')->insert([
            'type' => 'Lorem ipsum dolor sit, a',
            'costo' => 28,
            'active' => true
        ]); 
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresas')->insert([
            'name' => 'corvy inc',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa perspiciatis voluptas similique, error maxime officia earum dolores accusantium amet! Omnis autem deleniti debitis recusandae quidem nisi est? Maxime, officia ad!',
            'phone' => '011 50488031'
        ]); 
        DB::table('empresas')->insert([
            'name' => 'corvy inc 2',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa perspiciatis voluptas similique, error maxime officia earum dolores accusantium amet! Omnis autem deleniti debitis recusandae quidem nisi est? Maxime, officia ad!',
            'phone' => '011 50488031'
        ]); 
        DB::table('empresas')->insert([
            'name' => 'corvy inc 3',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa perspiciatis voluptas similique, error maxime officia earum dolores accusantium amet! Omnis autem deleniti debitis recusandae quidem nisi est? Maxime, officia ad!',
            'phone' => '011 50488031'
        ]); 
    }
}

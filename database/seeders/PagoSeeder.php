<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pagos')->insert([
            'id_student' => 1,
            'id_cost' => 1
        ]);
        DB::table('pagos')->insert([
            'id_student' => 2,
            'id_cost' => 2
        ]);
        DB::table('pagos')->insert([
            'id_student' => 3,
            'id_cost' => 3
        ]);
    }
}

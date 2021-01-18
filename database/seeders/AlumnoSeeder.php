<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alumnos')->insert([
            'name' => 'gonzalo salvador',
            'lastname' => 'corvalan',
            'phone' => '011 50488031',
            'email' => 'mr.corvy@gmail.com',
            'state' => 'Paid',
            'peruvian' => false,
            'assistance' => true,
            'id_company' => 1
        ]); 
        DB::table('alumnos')->insert([
            'name' => 'gonzalo salvador 2',
            'lastname' => 'corvalan2',
            'phone' => '011 50488031',
            'email' => 'mr.corvy2@gmail.com',
            'state' => 'Paid',
            'peruvian' => false,
            'assistance' => true,
            'id_company' => 2
        ]); 
        DB::table('alumnos')->insert([
            'name' => 'gonzalo salvador3',
            'lastname' => 'corvalan3',
            'phone' => '011 50488031',
            'email' => 'mr.corvy3@gmail.com',
            'state' => 'Paid',
            'peruvian' => false,
            'assistance' => true,
            'id_company' => 3
        ]); 
    }
}

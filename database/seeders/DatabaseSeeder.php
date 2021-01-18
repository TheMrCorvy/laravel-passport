<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EmpresaSeeder::class);
        $this->call(PrecioSeeder::class);
        $this->call(AlumnoSeeder::class);
        $this->call(PagoSeeder::class);
    }
}

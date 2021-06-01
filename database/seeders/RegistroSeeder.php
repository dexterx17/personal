<?php

namespace Database\Seeders;

use App\Models\Registro;
use Illuminate\Database\Seeder;

class RegistroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Registro::factory(10)->create();
    }
}

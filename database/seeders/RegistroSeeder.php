<?php

namespace Database\Seeders;

use App\Models\Registro;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegistroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Registro::factory(4)->create();


    }
}

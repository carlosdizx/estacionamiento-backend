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
        DB::table('registros')->insert([
            'inicio' => '2021-11-1',
            'fin' => '2021-11-1',
            'propietario' => '1234',
            'placa' => '321'

        ]);

        Registro::factory(4)->create();


    }
}

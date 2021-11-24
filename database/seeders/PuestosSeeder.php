<?php

namespace Database\Seeders;

use App\Models\Puesto;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PuestosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('puestos')->insert([
            'inicio' => '2021-11-1',
            'propietario' => '',
            'placa' => '1'

        ]);

        DB::table('puestos')->insert([
            'inicio' => '2021-11-2',
            'propietario' => '',
            'placa' => '1'

        ]);

        DB::table('puestos')->insert([
            'inicio' => '2021-11-3',
            'propietario' => '',
            'placa' => '1'
        ]);
        Puesto::factory(17)->create();

    }
}

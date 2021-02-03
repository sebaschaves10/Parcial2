<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PreciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $datos = [
            [
                'Tipo' => 'Sencilla',
                'precio' => '20000',

            ],
            [
                'Tipo' => 'Doble',
                'precio' => '40000',
            ],
            [
                'Tipo' => 'Matrimonio',
                'precio' => '30000',
            ],
            [
                'Tipo' => 'Suite',
                'precio' => '50000',
            ],
            [
                'Tipo' => 'Triple',
                'precio' => '60000',
            ]
        ];
        DB::table('precio')->insert($datos);
    }
}

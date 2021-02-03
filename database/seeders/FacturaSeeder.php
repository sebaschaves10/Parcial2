<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FacturaSeeder extends Seeder
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
                'Numero' => '1',
                'cliente' => '1',
                'formaPago' => '1',
                'Entrada' => '2020-11-24 17:15:10',
                'Salida' => '2020-11-25 18:16:50',
                'Total' => '20000'

            ],
            [
                'Numero' => '2',
                'cliente' => '2',
                'formaPago' => '2',
                'Entrada' => '2020-11-29 20:00:10',
                'Salida' => '2020-11-30 10:16:50',
                'Total' => '40000'
            ],
            [
                'Numero' => '3',
                'cliente' => '3',
                'formaPago' => '3',
                'Entrada' => '2020-12-01 10:08:10',
                'Salida' => '2020-12-01 21:01:50',
                'Total' => '30000'
            ],
            [
                'Numero' => '4',
                'cliente' => '4',
                'formaPago' => '4',
                'Entrada' => '2020-12-05 17:15:10',
                'Salida' => '2020-12-06 11:11:50',
                'Total' => '50000'
            ],
            [
                'Numero' => '5',
                'cliente' => '5',
                'formaPago' => '5',
                'Entrada' => '2020-12-10 16:15:10',
                'Salida' => '2020-12-11 10:16:50',
                'Total' => '60000'
            ],
            [
                'Numero' => '1',
                'cliente' => '1',
                'formaPago' => '1',
                'Entrada' => '2020-12-10 17:15:10',
                'Salida' => null,
                'Total' => '20000'

            ],
            [
                'Numero' => '3',
                'cliente' => '2',
                'formaPago' => '2',
                'Entrada' => '2020-12-16 20:00:10',
                'Salida' => null,
                'Total' => '30000'
            ]
        ];
        DB::table('factura')->insert($datos);
    }
}

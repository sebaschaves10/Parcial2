<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FormaPagoSeeder extends Seeder
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
                'descripcion'=>'Efectivo',
            ],
            [
                'descripcion'=>'Credito',
            ],
            [
                'descripcion'=>'Debito',
            ],
            [
                'descripcion'=>'Consignacion',
            ],
            [
                'descripcion'=>'Paypal',
            ]
        ];
        DB::table('formaPago')->insert($datos);
    }
}

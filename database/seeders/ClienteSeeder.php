<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
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
                'DNI' => '1085941705',
                'nombres' => 'Emerson Chacua',
                'genero' => 'M',
                'Domicilio' => 'Calle 14 # 2 A',
                'Telefono' => '315762054',
                'foto' => 'emerson.jpg',

            ],
            [
                'DNI' => '1085941802',
                'nombres' => 'Sebastian Chaves',
                'genero' => 'M',
                'Domicilio' => 'Calle 17 # 1 A',
                'Telefono' => '315636606',
                'foto' => 'sebastian.jpg',
            ],
            [
                'DNI' => '1085941844',
                'nombres' => 'Daniela Revelo',
                'genero' => 'F',
                'Domicilio' => 'Calle 12 # 5 B',
                'Telefono' => '30010233',
                'foto' => 'daniela.jpg',
            ],
            [
                'DNI' => '1085942655',
                'nombres' => 'Juan Lopez',
                'genero' => 'M',
                'Domicilio' => 'Calle 12 # 14 C',
                'Telefono' => '31240567',
                'foto' => 'juan.jpg',
            ],
            [
                'DNI' => '1085970401',
                'nombres' => 'Eliana Martinez',
                'genero' => 'F',
                'Domicilio' => 'Calle 11 # 2 D',
                'Telefono' => '315770606',
                'foto' => 'eliana.jpg',
            ]
        ];
        DB::table('cliente')->insert($datos);
    }
}

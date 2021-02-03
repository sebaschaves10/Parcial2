<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class EditorialesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            [
                'nombreEditorial' => 'Norma',
                'direccion' => 'Av. el Dorado 90-10',
                'ciudad' => 'Bogota',
                'telefono' => '3255181'
            ],
            [
                'nombreEditorial' => 'Mc Graw Hill',
                'direccion' => 'Carrera 85 k # 46a-66',
                'ciudad' => 'Bogota',
                'telefono' => '466223'
            ],
            [
                'nombreEditorial' => 'Alfaomega Colombia',
                'direccion' => 'Cl. 62 # 20-46',
                'ciudad' => 'Bogota',
                'telefono' => '98875'
            ],
            [
                'nombreEditorial' => 'Los Tres Editores S.A.S.',
                'direccion' => 'Cl. 32 # 8a-95',
                'ciudad' => 'Cali',
                'telefono' => '336510'
            ],
            [
                'nombreEditorial' => 'La Santillana',
                'direccion' => 'Cra. 82 # 12 N 33',
                'ciudad' => 'Medellion',
                'telefono' => '748550'
            ]
        ];
        DB::table('editoriales')->insert($datos);
    }
}

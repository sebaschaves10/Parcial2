<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class LibrosSeeder extends Seeder
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
                'isbn'=>'00982',
                'nombreLibro'=>'Cien años de soledad',
                'stock'=>'100',
                'editorial'=>'1',
                'precio'=>'80200',
                'descuento'=>'4010',
                'estado'=>'1',
            
            ],
            [
                'isbn'=>'123',
                'nombreLibro'=>'¿Quien se ha llevado mi queso?',
                'stock'=>'5',
                'editorial'=>'2',
                'precio'=>'25000',
                'descuento'=>'0',
                'estado'=>'1',
            ],
            [
                'isbn'=>'2',
                'nombreLibro'=>'El Cornel',
                'stock'=>'70',
                'editorial'=>'3',
                'precio'=>'80200',
                'descuento'=>'4010',
                'estado'=>'1',
            
            ],
            [
                'isbn'=>'3',
                'nombreLibro'=>'La vaca',
                'stock'=>'100',
                'editorial'=>'4',
                'precio'=>'80200',
                'descuento'=>'0',
                'estado'=>'1',
            
            ],
            [
                'isbn'=>'4',
                'nombreLibro'=>'Phsicosi',
                'stock'=>'100',
                'editorial'=>'5',
                'precio'=>'80200',
                'descuento'=>'0',
                'estado'=>'1',
            
            ]
          
        ];
        DB::table('libros')->insert($datos);
    }
}

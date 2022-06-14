<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DispositivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dispositivos')->insert([
            [
                'nombre_dispositivo' => 'Celular iPhone',
                'modelo_id' => 1,
                'bodega_id' => 1
            ],

            [
                'nombre_dispositivo' => 'Tablet iPad',
                'modelo_id' => 3,
                'bodega_id' => 1
            ],
            [
                'nombre_dispositivo' => 'Celular iPhone',
                'modelo_id' => 2,
                'bodega_id' => 1
            ],
            [
                'nombre_dispositivo' => 'Celular iPhone',
                'modelo_id' => 6,
                'bodega_id' => 1
            ],
            [
                'nombre_dispositivo' => 'Celular iPhone',
                'modelo_id' => 7,
                'bodega_id' => 1
            ],
            [
                'nombre_dispositivo' => 'Celular iPhone',
                'modelo_id' => 8,
                'bodega_id' => 1
            ],
            [
                'nombre_dispositivo' => 'Celular Samsung',
                'modelo_id' => 9,
                'bodega_id' => 1
            ],

            [
                'nombre_dispositivo' => 'Celular Samsung',
                'modelo_id' => 10,
                'bodega_id' => 1
            ],
            [
                'nombre_dispositivo' => 'Celular Samsung',
                'modelo_id' => 11,
                'bodega_id' => 1
            ],
            [
                'nombre_dispositivo' => 'Celular Samsung',
                'modelo_id' => 12,
                'bodega_id' => 1
            ],
            [
                'nombre_dispositivo' => 'Celular Samsung',
                'modelo_id' => 13,
                'bodega_id' => 1
            ]
            ,
            [
                'nombre_dispositivo' => 'Celular Samsung',
                'modelo_id' => 14,
                'bodega_id' => 1
            ],
            [
                'nombre_dispositivo' => 'Celular Samsung',
                'modelo_id' => 15,
                'bodega_id' => 1
            ],
            [
                'nombre_dispositivo' => 'Celular Samsung',
                'modelo_id' => 16,
                'bodega_id' => 1
            ],
            [
                'nombre_dispositivo' => 'Celular XIAOMI',
                'modelo_id' => 54,
                'bodega_id' => 1
            ],
            [
                'nombre_dispositivo' => 'Celular XIAOMI',
                'modelo_id' => 55,
                'bodega_id' => 1
            ],
            [
                'nombre_dispositivo' => 'Celular XIAOMI',
                'modelo_id' => 56,
                'bodega_id' => 1
            ],
            [
                'nombre_dispositivo' => 'Celular XIAOMI',
                'modelo_id' => 57,
                'bodega_id' => 1
            ],
            [
                'nombre_dispositivo' => 'Celular XIAOMI',
                'modelo_id' => 58,
                'bodega_id' => 1
            ],
            [
                'nombre_dispositivo' => 'Celular iPhone',
                'modelo_id' => 6,
                'bodega_id' => 1
            ] ,
            [
                'nombre_dispositivo' => 'Celular iPhone',
                'modelo_id' => 2,
                'bodega_id' => 1
            ] ,
            [
                'nombre_dispositivo' => 'Consola Microsoft 2 GEN',
                'modelo_id' => 17,
                'bodega_id' => 3
            ],
            [
                'nombre_dispositivo' => 'Consola Microsoft 2 GEN',
                'modelo_id' => 18,
                'bodega_id' => 3
            ],
            [
                'nombre_dispositivo' => 'Consola Microsoft 2 GEN',
                'modelo_id' => 19,
                'bodega_id' => 3
            ],
            [
                'nombre_dispositivo' => 'CONSOLA Sony 2 GEN',
                'modelo_id' => 25,
                'bodega_id' => 3
            ],
            [
                'nombre_dispositivo' => 'Computador Asus',
                'modelo_id' => 32,
                'bodega_id' => 2
            ],
            [
                'nombre_dispositivo' => 'Computador Asus',
                'modelo_id' => 33,
                'bodega_id' => 2
            ],
            [
                'nombre_dispositivo' => 'Computador Asus',
                'modelo_id' => 34,
                'bodega_id' => 2
            ],
            [
                'nombre_dispositivo' => 'Computador Asus',
                'modelo_id' => 35,
                'bodega_id' => 2
            ],
            [
                'nombre_dispositivo' => 'Computador Asus',
                'modelo_id' => 36,
                'bodega_id' => 2
            ],
            [
                'nombre_dispositivo' => 'Computador Asus',
                'modelo_id' => 37,
                'bodega_id' => 2
            ],
            [
                'nombre_dispositivo' => 'Computador Asus',
                'modelo_id' => 38,
                'bodega_id' => 2
            ],
            [
                'nombre_dispositivo' => 'Computador HP',
                'modelo_id' => 39,
                'bodega_id' => 2
            ],
            [
                'nombre_dispositivo' => 'Computador HP',
                'modelo_id' => 40,
                'bodega_id' => 2
            ],
            [
                'nombre_dispositivo' => 'Computador HP',
                'modelo_id' => 41,
                'bodega_id' => 2
            ],
            [
                'nombre_dispositivo' => 'Computador HP',
                'modelo_id' => 42,
                'bodega_id' => 2
            ],
            [
                'nombre_dispositivo' => 'Computador HP',
                'modelo_id' => 43,
                'bodega_id' => 2
            ],
            [
                'nombre_dispositivo' => 'Consola Microsoft',
                'modelo_id' => 17,
                'bodega_id' => 3
            ],
            [
                'nombre_dispositivo' => 'Consola Microsoft',
                'modelo_id' => 18,
                'bodega_id' => 3
            ],
            [
                'nombre_dispositivo' => 'Consola Microsoft',
                'modelo_id' => 19,
                'bodega_id' => 3
            ],
            [
                'nombre_dispositivo' => 'Consola Microsoft',
                'modelo_id' => 20,
                'bodega_id' => 3
            ],
            [
                'nombre_dispositivo' => 'Consola SONY',
                'modelo_id' => 25,
                'bodega_id' => 3
            ],
            [
                'nombre_dispositivo' => 'Consola SONY',
                'modelo_id' => 26,
                'bodega_id' => 3
            ],
            [
                'nombre_dispositivo' => 'Consola SONY',
                'modelo_id' => 27,
                'bodega_id' => 3
            ],
            [
                'nombre_dispositivo' => 'Tv SONY',
                'modelo_id' => 28,
                'bodega_id' => 4
            ],
            [
                'nombre_dispositivo' => 'Tv SONY',
                'modelo_id' => 29,
                'bodega_id' => 4
            ],
            [
                'nombre_dispositivo' => 'Tv SONY',
                'modelo_id' => 30,
                'bodega_id' => 4
            ],
            [
                'nombre_dispositivo' => 'Tv SONY',
                'modelo_id' => 31,
                'bodega_id' => 4
            ],
            [
                'nombre_dispositivo' => 'MONITOR GEAR',
                'modelo_id' => 44,
                'bodega_id' => 4
            ],
            [
                'nombre_dispositivo' => 'MONITOR GEAR',
                'modelo_id' => 45,
                'bodega_id' => 4
            ],
            [
                'nombre_dispositivo' => 'MONITOR GEAR',
                'modelo_id' => 46,
                'bodega_id' => 4
            ],
            [
                'nombre_dispositivo' => 'MONITOR GEAR',
                'modelo_id' => 47,
                'bodega_id' => 4
            ],
            [
                'nombre_dispositivo' => 'MONITOR GEAR',
                'modelo_id' => 48,
                'bodega_id' => 4
            ],
            [
                'nombre_dispositivo' => 'TV LG',
                'modelo_id' => 49,
                'bodega_id' => 4
            ],
            [
                'nombre_dispositivo' => 'TV LG',
                'modelo_id' => 50,
                'bodega_id' => 4
            ],
            [
                'nombre_dispositivo' => 'TV LG',
                'modelo_id' => 51,
                'bodega_id' => 4
            ],
            [
                'nombre_dispositivo' => 'TV LG',
                'modelo_id' => 52,
                'bodega_id' => 4
            ],
            [
                'nombre_dispositivo' => 'TV LG',
                'modelo_id' => 53,
                'bodega_id' => 4
            ]
           
        
        ]);
    }
    
}

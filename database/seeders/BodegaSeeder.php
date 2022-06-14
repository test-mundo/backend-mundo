<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BodegaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bodegas')->insert([
            [   'id' => 1,
                'nombre_bodega' => 'Bodega de celulares y Tablet'
            ],
            [   'id' => 2,
                'nombre_bodega' => 'Bodega de computadores'
            ],
            [   'id' => 3,
                'nombre_bodega' => 'Bodega de consolas'
            ],
            [   'id' => 4,
                'nombre_bodega' => 'Bodega de Televisores'
            ]
        ]);
    }
}

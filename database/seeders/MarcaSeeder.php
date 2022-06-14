<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marcas')->insert([
            [   'id' => 1,
                'nombre_marca' => 'Apple'
            ],
            [   'id' => 2,
                'nombre_marca' => 'Samsung'
            ],
            [   'id' => 3,
                'nombre_marca' => 'Microsoft'
            ],
            [   'id' => 4,
            'nombre_marca' => 'Sony'
            ],
            [   'id' => 5,
            'nombre_marca' => 'Asus'
            ],
            [   'id' => 6,
            'nombre_marca' => 'HP'
            ],
            [   'id' => 7,
            'nombre_marca' => 'GEAR'
            ],
            [   'id' => 8,
            'nombre_marca' => 'LG'
            ],
            [   'id' => 9,
            'nombre_marca' => 'Xiaomi'
            ]

       
           
        ]);
    }
}

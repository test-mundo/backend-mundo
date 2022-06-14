<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModeloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modelos')->insert([
            [   'nombre_modelo' => 'iPhone',
                'marca_id' => 1
            ],
            [   'nombre_modelo' => 'iPhone 13',
                'marca_id' => 1
            ],
            [   'nombre_modelo' => 'iPad Air',
                'marca_id' => 1
            ],
            [   'nombre_modelo' => 'Mac M1',
                'marca_id' => 1
            ],
            [   'nombre_modelo' => 'Macbook Pro M1',
                'marca_id' => 1
            ],
            [   'nombre_modelo' => 'iPhone 11',
                'marca_id' => 1
            ],
            [   'nombre_modelo' => 'iPhone XR',
                'marca_id' => 1
            ],
            [   'nombre_modelo' => 'iPhone 4',
                'marca_id' => 1
            ],
            [   'nombre_modelo' => 'galaxy 1',
                'marca_id' => 2
            ],
            [   'nombre_modelo' => 'galaxy A80',
                'marca_id' => 2
            ],
            [   'nombre_modelo' => 'galaxy A90',
                'marca_id' => 2
            ],
            [   'nombre_modelo' => 'S20',
                'marca_id' => 2
            ],
            [   'nombre_modelo' => 'S30',
                'marca_id' => 2
            ],
            [   'nombre_modelo' => 'A38',
                'marca_id' => 2
            ],
            [   'nombre_modelo' => 'A20',
                'marca_id' => 2
            ],
            [   'nombre_modelo' => 'A50',
                'marca_id' => 2
            ],
            [   'nombre_modelo' => 'XBOX 320',
                'marca_id' => 3
            ],
            [   'nombre_modelo' => 'XBOX ONE',
                'marca_id' => 3
            ],
            [   'nombre_modelo' => 'XBOX ONE X',
                'marca_id' => 3
            ],
            [   'nombre_modelo' => 'XBOX SERIES',
                'marca_id' => 3
            ],
            [   'nombre_modelo' => 'Surface pro 1',
                'marca_id' => 3
            ],
            [   'nombre_modelo' => 'Surface pro 2',
                'marca_id' => 3
            ],
            [   'nombre_modelo' => 'Surface pro 4',
                'marca_id' => 3
            ],
            [   'nombre_modelo' => 'Surface pro 5',
                'marca_id' => 3
            ],
            [   'nombre_modelo' => 'Playstation 4',
                'marca_id' => 4
            ],
            [   'nombre_modelo' => 'Playstation 5',
                'marca_id' => 4
            ],
            [   'nombre_modelo' => 'PS Vita',
                'marca_id' => 4
            ],
            [   'nombre_modelo' => 'TV OLED',
                'marca_id' => 4
            ],
            [   'nombre_modelo' => 'OLED 4K 32 PULGADAS',
                'marca_id' => 4
            ],
            [   'nombre_modelo' => 'MONITOR 5K OLED',
                'marca_id' => 4
            ],
            [   'nombre_modelo' => 'OLED 100',
                'marca_id' => 4
            ],
            [   'nombre_modelo' => 'VAIO',
                'marca_id' => 4
            ], 
            [   'nombre_modelo' => 'UX325',
                'marca_id' => 5
            ],
            [   'nombre_modelo' => 'UX344',
                'marca_id' => 5
            ],
            [   'nombre_modelo' => 'ZX555',
                'marca_id' => 5
            ],
            [   'nombre_modelo' => 'XC400',
                'marca_id' => 5
            ],
            [   'nombre_modelo' => 'XC422',
                'marca_id' => 5
            ],
            [   'nombre_modelo' => 'XC300',
                'marca_id' => 5
            ],
            [   'nombre_modelo' => 'PAVILION 1',
                'marca_id' => 6
            ],
            [   'nombre_modelo' => 'SPECTRE',
                'marca_id' => 6
            ],
            [   'nombre_modelo' => 'ASPIRE',
                'marca_id' => 6
            ],
            [   'nombre_modelo' => 'ASPIRE 2',
                'marca_id' => 6
            ],
            [   'nombre_modelo' => 'PAVILION 2',
                'marca_id' => 6
            ],

            [   'nombre_modelo' => 'U27',
                'marca_id' =>7
            ],
            [   'nombre_modelo' => 'U32',
                'marca_id' =>7
            ],
            [   'nombre_modelo' => 'U32',
                'marca_id' =>7
            ],
            [   'nombre_modelo' => 'U44',
                'marca_id' =>7
            ],
            [   'nombre_modelo' => 'U50',
                'marca_id' =>7
            ],


            [   'nombre_modelo' => '55C',
                'marca_id' =>8
            ],
            [   'nombre_modelo' => '55K',
                'marca_id' =>8
            ],
            [   'nombre_modelo' => '75K',
                'marca_id' =>8
            ],
            [   'nombre_modelo' => '79K',
                'marca_id' =>8
            ],
            [   'nombre_modelo' => '80K',
                'marca_id' =>8
            ],

            [   'nombre_modelo' => 'MI 1',
                'marca_id' =>9
            ],
            [   'nombre_modelo' => 'MI 2',
                'marca_id' =>9
            ],
            [   'nombre_modelo' => 'MI 3',
                'marca_id' =>9
            ],
            [   'nombre_modelo' => 'MI 4',
                'marca_id' =>9
            ],
            [   'nombre_modelo' => 'MI 5',
                'marca_id' =>9
            ],
        ]);
    }
}

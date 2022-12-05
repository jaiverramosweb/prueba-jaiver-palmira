<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class expertisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = '[
            {
                "name": "Artes plásticas"
            },
            {
                "name": "Teatro"
            },
            {
                "name": "Música"
            },
            {
                "name": "Danza"
            },
            {
                "name": "Cocina tradicional"
            },
            {
                "name": "Juegos tradicionales"
            },
            {
                "name": "Promoción de lectura"
            }
        ]';

        $array = json_decode($items);

        foreach($array as $obj)
        {

            DB::table('expertises')->insert([ 
                'name' => $obj->name
            ]);

        }
    }
}

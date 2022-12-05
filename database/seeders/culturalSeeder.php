<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class culturalSeeder extends Seeder
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
                "name": "Identidad y patrimonios culturales"
            },
            {
                "name": "Referencias a comunidades culturales"
            },
            {
                "name": "Acceso y participación en la vida cultural"
            },
            {
                "name": "Educación y formación"
            },
            {
                "name": "Información y comunicación"
            },
            {
                "name": "Cooperación cultural"
            }
        ]';

        $array = json_decode($items);

        foreach($array as $obj)
        {

            DB::table('culturals')->insert([ 
                'name' => $obj->name
            ]);

        }
    }
}

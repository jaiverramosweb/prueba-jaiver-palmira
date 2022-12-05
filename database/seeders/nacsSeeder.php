<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class nacsSeeder extends Seeder
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
                "name": "ALCALÁ"
            },
            {
                "name": "ANDALUCÍA"
            },
            {
                "name": "ANSERMANUEVO"
            },
            {
                "name": "ARGELIA"
            },
            {
                "name": "BOLÍVAR"
            },
            {
                "name": "BUENAVENTURA"
            },
            {
                "name": "BUGA"
            }
        ]';

        $array = json_decode($items);

        foreach($array as $obj)
        {

            DB::table('nacs')->insert([ 
                'name' => $obj->name
            ]);

        }
    }
}

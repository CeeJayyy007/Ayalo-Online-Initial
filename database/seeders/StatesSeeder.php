<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('states')->insert(
  
    
        [
            'name'=> 'Yobe',
            'created_at' => '2021-05-25 20:55:16',
            'updated_at' => '2021-05-25 20:55:16'

        ],
    
    
    
    );
    }
}

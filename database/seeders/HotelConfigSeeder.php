<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class HotelConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('property_types')->insert([
            [
                'id' => 1,
                'name' => 'Five Star'
            ],
            [
                'id' => 2,
                'name' => 'Resort'
            ], [
                'id' => 3,
                'name' => 'Home Stay'
            ],
        ]);
    }
}

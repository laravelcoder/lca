<?php

use Illuminate\Database\Seeder;

class ZipcodeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'zipcode' => '84107', 'location_id' => 1,],
            ['id' => 2, 'zipcode' => '84047', 'location_id' => 1,],

        ];

        foreach ($items as $item) {
            \App\Zipcode::create($item);
        }
    }
}

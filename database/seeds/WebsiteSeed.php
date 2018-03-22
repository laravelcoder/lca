<?php

use Illuminate\Database\Seeder;

class WebsiteSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'website' => 'https://www.liceclinicsofamerica.com/', 'location_id' => 1,],

        ];

        foreach ($items as $item) {
            \App\Website::create($item);
        }
    }
}

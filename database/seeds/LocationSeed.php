<?php

use Illuminate\Database\Seeder;

class LocationSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'company_id' => 1, 'nickname' => 'LCA CORPORATE', 'address' => '4850 S 154 E Myrtle Ave', 'address_2' => '#304', 'city' => 'Murray', 'state' => 'UT', 'phone' => '1-801-533-5423', 'phone2' => null, 'logo' => null, 'storefront' => null, 'google_map_link' => null, 'clinic_id' => null, 'email' => null, 'created_by_id' => null,],

        ];

        foreach ($items as $item) {
            \App\Location::create($item);
        }
    }
}

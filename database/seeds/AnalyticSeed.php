<?php

use Illuminate\Database\Seeder;

class AnalyticSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'view_name' => ' Master View', 'website_id' => 1, 'view_id' => '117039068',],

        ];

        foreach ($items as $item) {
            \App\Analytic::create($item);
        }
    }
}

<?php

use Illuminate\Database\Seeder;

class AssetsStatusSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'title' => 'Available',],
            ['id' => 2, 'title' => 'Not Available',],
            ['id' => 3, 'title' => 'Broken',],
            ['id' => 4, 'title' => 'Out for repair',],

        ];

        foreach ($items as $item) {
            \App\AssetsStatus::create($item);
        }
    }
}

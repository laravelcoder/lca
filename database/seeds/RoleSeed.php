<?php

use Illuminate\Database\Seeder;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'title' => 'Administrator (can create other users)',],
            ['id' => 3, 'title' => 'Clinic Owner',],
            ['id' => 4, 'title' => 'Clinic Employee',],
            ['id' => 5, 'title' => 'Vendor',],
            ['id' => 6, 'title' => 'Larada Employee',],
            ['id' => 7, 'title' => 'Larada Manager',],

        ];

        foreach ($items as $item) {
            \App\Role::create($item);
        }
    }
}

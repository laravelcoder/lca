<?php

use Illuminate\Database\Seeder;

class TaskStatusSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Open',],
            ['id' => 2, 'name' => 'In progress',],
            ['id' => 3, 'name' => 'Close',],

        ];

        foreach ($items as $item) {
            \App\TaskStatus::create($item);
        }
    }
}

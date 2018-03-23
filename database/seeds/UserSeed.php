<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 2, 'name' => 'Phillip Madsen', 'email' => 'wecodelaravel@gmail.com', 'password' => '$2y$10$j7cJa.A.q6N27TOvgBiZyeoxAEuhDIWooRnKTeLFfAXe3N7ffvxwy', 'role_id' => 8, 'remember_token' => null,],
            ['id' => 3, 'name' => 'Jessica Eddowes', 'email' => 'jessica@laradasciences.com', 'password' => '$2y$10$EXDZDoSZCy3l50udJg5pOOiU53Y52iJAC/iU.pqqTz.7FkmHNJ00i', 'role_id' => 1, 'remember_token' => null,],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}

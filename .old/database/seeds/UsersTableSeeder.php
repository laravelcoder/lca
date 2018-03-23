<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Phillip Madsen',
                'email' => 'wecodelaravel@gmail.com',
                'username' => 'PhillipMadsen',
                'password' => '$2y$10$67pP9tKVhQDyJ/ZJzo5rgOpQnrPlPXwsajnA0MZq..LgVbd/aNsqK',
                'confirmation_code' => 'lkdjfownfnosodhf',
                'confirmed' => 1,
                'admin' => 1,
                'profile_id' => 1,
                'quickbase_id' => NULL,
                'quickbase_company' => NULL,
                'remember_token' => 'HkPd6o8SupNzNfqx0lTCqZKitLkiUMjujLVd8LrHGJvBZ4xx5CclqYY0sndR',
                'created_at' => '2017-11-21 21:22:39',
                'updated_at' => '2017-11-21 21:22:39',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'jessica Eddowes',
                'email' => 'jessica@laradasciences.com',
                'username' => 'JessicaEddowes',
                'password' => '$2y$10$tOBIlllXIanXvlpXptbe..tFaJv1borU/3e6vmCSbonwcBwimCApa',
                'confirmation_code' => '$2y$10$TVt0lpj5cURDtuZInaNsXuQPqvukmxjirD4cE05L8E59wr7GNf.bC',
                'confirmed' => 1,
                'admin' => 1,
                'profile_id' => 2,
                'quickbase_id' => NULL,
                'quickbase_company' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-01-24 04:15:04',
                'updated_at' => '2018-01-24 04:15:04',
                'deleted_at' => NULL,
            ),
        ));


    }
}
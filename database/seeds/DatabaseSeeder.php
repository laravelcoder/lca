<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(ContactCompanySeed::class);
        $this->call(LocationSeed::class);
        $this->call(WebsiteSeed::class);
        $this->call(AdwordSeed::class);
        $this->call(AnalyticSeed::class);
        $this->call(AssetsStatusSeed::class);
        $this->call(ContactSeed::class);
        $this->call(RoleSeed::class);
        $this->call(TaskStatusSeed::class);
        $this->call(UserSeed::class);
        $this->call(TaskSeed::class);
        $this->call(ZipcodeSeed::class);

    }
}

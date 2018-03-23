<?php

use Illuminate\Database\Seeder;

class ContactSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'first_name' => 'Jessica', 'last_name' => 'Eddowes', 'phone1' => '1-415-994-8979', 'phone2' => null, 'email' => 'jessica@laradasciences.com ', 'company_id' => 1, 'skype' => null, 'twitter_username' => null, 'instagram_username' => null, 'facebook_url' => null, 'linked_in_url' => null, 'google_plus_url' => null, 'personal_website' => null, 'contact_type' => null,],

        ];

        foreach ($items as $item) {
            \App\Contact::create($item);
        }
    }
}

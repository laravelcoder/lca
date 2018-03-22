<?php

use Illuminate\Database\Seeder;

class AdwordSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'website_id' => 1, 'client_customer_id' => '199-359-6438', 'user_agent' => 'LARADA SCIENCES', 'client_id' => '448998543617-5b5b2l7tu0emlh1bs0oer78n0pke1hl4.apps.googleusercontent.com', 'client_secret' => '7Y3W9H-JBEbG922yj1zhITPi', 'refresh_token' => '1/ITL2Qtl-x4kk0__oznQnkcBTgMl-j0bRFANK5Mq8DKA', 'authorization_uri' => 'https://accounts.google.com/o/oauth2/v2/auth', 'redirect_uri' => 'urn:ietf:wg:oauth:2.0:oob', 'token_credential_uri' => 'https://www.googleapis.com/oauth2/v4/token', 'scope' => 'https://www.googleapis.com/auth/adwords',],

        ];

        foreach ($items as $item) {
            \App\Adword::create($item);
        }
    }
}

<?php

use Faker\Factory as Faker;
use App\Models\Adsclient;
use App\Repositories\AdsclientRepository;

trait MakeAdsclientTrait
{
    /**
     * Create fake instance of Adsclient and save it in database
     *
     * @param array $adsclientFields
     * @return Adsclient
     */
    public function makeAdsclient($adsclientFields = [])
    {
        /** @var AdsclientRepository $adsclientRepo */
        $adsclientRepo = App::make(AdsclientRepository::class);
        $theme = $this->fakeAdsclientData($adsclientFields);
        return $adsclientRepo->create($theme);
    }

    /**
     * Get fake instance of Adsclient
     *
     * @param array $adsclientFields
     * @return Adsclient
     */
    public function fakeAdsclient($adsclientFields = [])
    {
        return new Adsclient($this->fakeAdsclientData($adsclientFields));
    }

    /**
     * Get fake data of Adsclient
     *
     * @param array $postFields
     * @return array
     */
    public function fakeAdsclientData($adsclientFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'developer_token' => $fake->word,
            'client_customer_id' => $fake->word,
            'user_agent' => $fake->word,
            'client_id' => $fake->word,
            'client_secret' => $fake->word,
            'refresh_token' => $fake->word,
            'authorization_uri' => $fake->word,
            'redirect_uri' => $fake->word,
            'token_credential_uri' => $fake->word,
            'scope' => $fake->word,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s'),
            'user_id' => $fake->randomDigitNotNull,
            'clinic_id' => $fake->randomDigitNotNull
        ], $adsclientFields);
    }
}

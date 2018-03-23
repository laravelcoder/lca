<?php

use Faker\Factory as Faker;
use App\Models\Analyticsclient;
use App\Repositories\AnalyticsclientRepository;

trait MakeAnalyticsclientTrait
{
    /**
     * Create fake instance of Analyticsclient and save it in database
     *
     * @param array $analyticsclientFields
     * @return Analyticsclient
     */
    public function makeAnalyticsclient($analyticsclientFields = [])
    {
        /** @var AnalyticsclientRepository $analyticsclientRepo */
        $analyticsclientRepo = App::make(AnalyticsclientRepository::class);
        $theme = $this->fakeAnalyticsclientData($analyticsclientFields);
        return $analyticsclientRepo->create($theme);
    }

    /**
     * Get fake instance of Analyticsclient
     *
     * @param array $analyticsclientFields
     * @return Analyticsclient
     */
    public function fakeAnalyticsclient($analyticsclientFields = [])
    {
        return new Analyticsclient($this->fakeAnalyticsclientData($analyticsclientFields));
    }

    /**
     * Get fake data of Analyticsclient
     *
     * @param array $postFields
     * @return array
     */
    public function fakeAnalyticsclientData($analyticsclientFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'user_id' => $fake->randomDigitNotNull,
            'clinic_id' => $fake->randomDigitNotNull,
            'view_id' => $fake->word,
            'view_url' => $fake->word,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s'),
            'user_id' => $fake->randomDigitNotNull,
            'clinic_id' => $fake->randomDigitNotNull
        ], $analyticsclientFields);
    }
}

<?php

use Faker\Factory as Faker;
use App\Models\Website;
use App\Repositories\WebsiteRepository;

trait MakeWebsiteTrait
{
    /**
     * Create fake instance of Website and save it in database
     *
     * @param array $websiteFields
     * @return Website
     */
    public function makeWebsite($websiteFields = [])
    {
        /** @var WebsiteRepository $websiteRepo */
        $websiteRepo = App::make(WebsiteRepository::class);
        $theme = $this->fakeWebsiteData($websiteFields);
        return $websiteRepo->create($theme);
    }

    /**
     * Get fake instance of Website
     *
     * @param array $websiteFields
     * @return Website
     */
    public function fakeWebsite($websiteFields = [])
    {
        return new Website($this->fakeWebsiteData($websiteFields));
    }

    /**
     * Get fake data of Website
     *
     * @param array $postFields
     * @return array
     */
    public function fakeWebsiteData($websiteFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'website_name' => $fake->word,
            'website' => $fake->word,
            'clinic_id' => $fake->randomDigitNotNull,
            'profile_id' => $fake->randomDigitNotNull,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s')
        ], $websiteFields);
    }
}

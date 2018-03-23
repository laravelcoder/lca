<?php

use Faker\Factory as Faker;
use App\Models\Page;
use App\Repositories\PageRepository;

trait MakePageTrait
{
    /**
     * Create fake instance of Page and save it in database
     *
     * @param array $pageFields
     * @return Page
     */
    public function makePage($pageFields = [])
    {
        /** @var PageRepository $pageRepo */
        $pageRepo = App::make(PageRepository::class);
        $theme = $this->fakePageData($pageFields);
        return $pageRepo->create($theme);
    }

    /**
     * Get fake instance of Page
     *
     * @param array $pageFields
     * @return Page
     */
    public function fakePage($pageFields = [])
    {
        return new Page($this->fakePageData($pageFields));
    }

    /**
     * Get fake data of Page
     *
     * @param array $postFields
     * @return array
     */
    public function fakePageData($pageFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'title' => $fake->word,
            'meta_description' => $fake->text,
            'content' => $fake->text,
            'banner' => $fake->word,
            'slug' => $fake->word,
            'lang' => $fake->word,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s')
        ], $pageFields);
    }
}

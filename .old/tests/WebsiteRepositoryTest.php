<?php

use App\Models\Website;
use App\Repositories\WebsiteRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class WebsiteRepositoryTest extends TestCase
{
    use MakeWebsiteTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var WebsiteRepository
     */
    protected $websiteRepo;

    public function setUp()
    {
        parent::setUp();
        $this->websiteRepo = App::make(WebsiteRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateWebsite()
    {
        $website = $this->fakeWebsiteData();
        $createdWebsite = $this->websiteRepo->create($website);
        $createdWebsite = $createdWebsite->toArray();
        $this->assertArrayHasKey('id', $createdWebsite);
        $this->assertNotNull($createdWebsite['id'], 'Created Website must have id specified');
        $this->assertNotNull(Website::find($createdWebsite['id']), 'Website with given id must be in DB');
        $this->assertModelData($website, $createdWebsite);
    }

    /**
     * @test read
     */
    public function testReadWebsite()
    {
        $website = $this->makeWebsite();
        $dbWebsite = $this->websiteRepo->find($website->id);
        $dbWebsite = $dbWebsite->toArray();
        $this->assertModelData($website->toArray(), $dbWebsite);
    }

    /**
     * @test update
     */
    public function testUpdateWebsite()
    {
        $website = $this->makeWebsite();
        $fakeWebsite = $this->fakeWebsiteData();
        $updatedWebsite = $this->websiteRepo->update($fakeWebsite, $website->id);
        $this->assertModelData($fakeWebsite, $updatedWebsite->toArray());
        $dbWebsite = $this->websiteRepo->find($website->id);
        $this->assertModelData($fakeWebsite, $dbWebsite->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteWebsite()
    {
        $website = $this->makeWebsite();
        $resp = $this->websiteRepo->delete($website->id);
        $this->assertTrue($resp);
        $this->assertNull(Website::find($website->id), 'Website should not exist in DB');
    }
}

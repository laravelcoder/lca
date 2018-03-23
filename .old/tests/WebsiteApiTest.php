<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class WebsiteApiTest extends TestCase
{
    use MakeWebsiteTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateWebsite()
    {
        $website = $this->fakeWebsiteData();
        $this->json('POST', '/api/v1/websites', $website);

        $this->assertApiResponse($website);
    }

    /**
     * @test
     */
    public function testReadWebsite()
    {
        $website = $this->makeWebsite();
        $this->json('GET', '/api/v1/websites/'.$website->id);

        $this->assertApiResponse($website->toArray());
    }

    /**
     * @test
     */
    public function testUpdateWebsite()
    {
        $website = $this->makeWebsite();
        $editedWebsite = $this->fakeWebsiteData();

        $this->json('PUT', '/api/v1/websites/'.$website->id, $editedWebsite);

        $this->assertApiResponse($editedWebsite);
    }

    /**
     * @test
     */
    public function testDeleteWebsite()
    {
        $website = $this->makeWebsite();
        $this->json('DELETE', '/api/v1/websites/'.$website->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/websites/'.$website->id);

        $this->assertResponseStatus(404);
    }
}

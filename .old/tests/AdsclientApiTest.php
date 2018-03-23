<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AdsclientApiTest extends TestCase
{
    use MakeAdsclientTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateAdsclient()
    {
        $adsclient = $this->fakeAdsclientData();
        $this->json('POST', '/api/v1/adsclients', $adsclient);

        $this->assertApiResponse($adsclient);
    }

    /**
     * @test
     */
    public function testReadAdsclient()
    {
        $adsclient = $this->makeAdsclient();
        $this->json('GET', '/api/v1/adsclients/'.$adsclient->id);

        $this->assertApiResponse($adsclient->toArray());
    }

    /**
     * @test
     */
    public function testUpdateAdsclient()
    {
        $adsclient = $this->makeAdsclient();
        $editedAdsclient = $this->fakeAdsclientData();

        $this->json('PUT', '/api/v1/adsclients/'.$adsclient->id, $editedAdsclient);

        $this->assertApiResponse($editedAdsclient);
    }

    /**
     * @test
     */
    public function testDeleteAdsclient()
    {
        $adsclient = $this->makeAdsclient();
        $this->json('DELETE', '/api/v1/adsclients/'.$adsclient->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/adsclients/'.$adsclient->id);

        $this->assertResponseStatus(404);
    }
}

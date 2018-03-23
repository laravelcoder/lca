<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AnalyticsclientApiTest extends TestCase
{
    use MakeAnalyticsclientTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateAnalyticsclient()
    {
        $analyticsclient = $this->fakeAnalyticsclientData();
        $this->json('POST', '/api/v1/analyticsclients', $analyticsclient);

        $this->assertApiResponse($analyticsclient);
    }

    /**
     * @test
     */
    public function testReadAnalyticsclient()
    {
        $analyticsclient = $this->makeAnalyticsclient();
        $this->json('GET', '/api/v1/analyticsclients/'.$analyticsclient->id);

        $this->assertApiResponse($analyticsclient->toArray());
    }

    /**
     * @test
     */
    public function testUpdateAnalyticsclient()
    {
        $analyticsclient = $this->makeAnalyticsclient();
        $editedAnalyticsclient = $this->fakeAnalyticsclientData();

        $this->json('PUT', '/api/v1/analyticsclients/'.$analyticsclient->id, $editedAnalyticsclient);

        $this->assertApiResponse($editedAnalyticsclient);
    }

    /**
     * @test
     */
    public function testDeleteAnalyticsclient()
    {
        $analyticsclient = $this->makeAnalyticsclient();
        $this->json('DELETE', '/api/v1/analyticsclients/'.$analyticsclient->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/analyticsclients/'.$analyticsclient->id);

        $this->assertResponseStatus(404);
    }
}

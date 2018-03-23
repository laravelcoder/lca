<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ClinicApiTest extends TestCase
{
    use MakeClinicTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateClinic()
    {
        $clinic = $this->fakeClinicData();
        $this->json('POST', '/api/v1/clinics', $clinic);

        $this->assertApiResponse($clinic);
    }

    /**
     * @test
     */
    public function testReadClinic()
    {
        $clinic = $this->makeClinic();
        $this->json('GET', '/api/v1/clinics/'.$clinic->id);

        $this->assertApiResponse($clinic->toArray());
    }

    /**
     * @test
     */
    public function testUpdateClinic()
    {
        $clinic = $this->makeClinic();
        $editedClinic = $this->fakeClinicData();

        $this->json('PUT', '/api/v1/clinics/'.$clinic->id, $editedClinic);

        $this->assertApiResponse($editedClinic);
    }

    /**
     * @test
     */
    public function testDeleteClinic()
    {
        $clinic = $this->makeClinic();
        $this->json('DELETE', '/api/v1/clinics/'.$clinic->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/clinics/'.$clinic->id);

        $this->assertResponseStatus(404);
    }
}

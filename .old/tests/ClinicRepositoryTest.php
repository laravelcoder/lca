<?php

use App\Models\Clinic;
use App\Repositories\ClinicRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ClinicRepositoryTest extends TestCase
{
    use MakeClinicTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var ClinicRepository
     */
    protected $clinicRepo;

    public function setUp()
    {
        parent::setUp();
        $this->clinicRepo = App::make(ClinicRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateClinic()
    {
        $clinic = $this->fakeClinicData();
        $createdClinic = $this->clinicRepo->create($clinic);
        $createdClinic = $createdClinic->toArray();
        $this->assertArrayHasKey('id', $createdClinic);
        $this->assertNotNull($createdClinic['id'], 'Created Clinic must have id specified');
        $this->assertNotNull(Clinic::find($createdClinic['id']), 'Clinic with given id must be in DB');
        $this->assertModelData($clinic, $createdClinic);
    }

    /**
     * @test read
     */
    public function testReadClinic()
    {
        $clinic = $this->makeClinic();
        $dbClinic = $this->clinicRepo->find($clinic->id);
        $dbClinic = $dbClinic->toArray();
        $this->assertModelData($clinic->toArray(), $dbClinic);
    }

    /**
     * @test update
     */
    public function testUpdateClinic()
    {
        $clinic = $this->makeClinic();
        $fakeClinic = $this->fakeClinicData();
        $updatedClinic = $this->clinicRepo->update($fakeClinic, $clinic->id);
        $this->assertModelData($fakeClinic, $updatedClinic->toArray());
        $dbClinic = $this->clinicRepo->find($clinic->id);
        $this->assertModelData($fakeClinic, $dbClinic->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteClinic()
    {
        $clinic = $this->makeClinic();
        $resp = $this->clinicRepo->delete($clinic->id);
        $this->assertTrue($resp);
        $this->assertNull(Clinic::find($clinic->id), 'Clinic should not exist in DB');
    }
}

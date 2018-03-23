<?php

use App\Models\Analyticsclient;
use App\Repositories\AnalyticsclientRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AnalyticsclientRepositoryTest extends TestCase
{
    use MakeAnalyticsclientTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var AnalyticsclientRepository
     */
    protected $analyticsclientRepo;

    public function setUp()
    {
        parent::setUp();
        $this->analyticsclientRepo = App::make(AnalyticsclientRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateAnalyticsclient()
    {
        $analyticsclient = $this->fakeAnalyticsclientData();
        $createdAnalyticsclient = $this->analyticsclientRepo->create($analyticsclient);
        $createdAnalyticsclient = $createdAnalyticsclient->toArray();
        $this->assertArrayHasKey('id', $createdAnalyticsclient);
        $this->assertNotNull($createdAnalyticsclient['id'], 'Created Analyticsclient must have id specified');
        $this->assertNotNull(Analyticsclient::find($createdAnalyticsclient['id']), 'Analyticsclient with given id must be in DB');
        $this->assertModelData($analyticsclient, $createdAnalyticsclient);
    }

    /**
     * @test read
     */
    public function testReadAnalyticsclient()
    {
        $analyticsclient = $this->makeAnalyticsclient();
        $dbAnalyticsclient = $this->analyticsclientRepo->find($analyticsclient->id);
        $dbAnalyticsclient = $dbAnalyticsclient->toArray();
        $this->assertModelData($analyticsclient->toArray(), $dbAnalyticsclient);
    }

    /**
     * @test update
     */
    public function testUpdateAnalyticsclient()
    {
        $analyticsclient = $this->makeAnalyticsclient();
        $fakeAnalyticsclient = $this->fakeAnalyticsclientData();
        $updatedAnalyticsclient = $this->analyticsclientRepo->update($fakeAnalyticsclient, $analyticsclient->id);
        $this->assertModelData($fakeAnalyticsclient, $updatedAnalyticsclient->toArray());
        $dbAnalyticsclient = $this->analyticsclientRepo->find($analyticsclient->id);
        $this->assertModelData($fakeAnalyticsclient, $dbAnalyticsclient->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteAnalyticsclient()
    {
        $analyticsclient = $this->makeAnalyticsclient();
        $resp = $this->analyticsclientRepo->delete($analyticsclient->id);
        $this->assertTrue($resp);
        $this->assertNull(Analyticsclient::find($analyticsclient->id), 'Analyticsclient should not exist in DB');
    }
}

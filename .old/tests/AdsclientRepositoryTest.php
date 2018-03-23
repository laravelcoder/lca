<?php

use App\Models\Adsclient;
use App\Repositories\AdsclientRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AdsclientRepositoryTest extends TestCase
{
    use MakeAdsclientTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var AdsclientRepository
     */
    protected $adsclientRepo;

    public function setUp()
    {
        parent::setUp();
        $this->adsclientRepo = App::make(AdsclientRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateAdsclient()
    {
        $adsclient = $this->fakeAdsclientData();
        $createdAdsclient = $this->adsclientRepo->create($adsclient);
        $createdAdsclient = $createdAdsclient->toArray();
        $this->assertArrayHasKey('id', $createdAdsclient);
        $this->assertNotNull($createdAdsclient['id'], 'Created Adsclient must have id specified');
        $this->assertNotNull(Adsclient::find($createdAdsclient['id']), 'Adsclient with given id must be in DB');
        $this->assertModelData($adsclient, $createdAdsclient);
    }

    /**
     * @test read
     */
    public function testReadAdsclient()
    {
        $adsclient = $this->makeAdsclient();
        $dbAdsclient = $this->adsclientRepo->find($adsclient->id);
        $dbAdsclient = $dbAdsclient->toArray();
        $this->assertModelData($adsclient->toArray(), $dbAdsclient);
    }

    /**
     * @test update
     */
    public function testUpdateAdsclient()
    {
        $adsclient = $this->makeAdsclient();
        $fakeAdsclient = $this->fakeAdsclientData();
        $updatedAdsclient = $this->adsclientRepo->update($fakeAdsclient, $adsclient->id);
        $this->assertModelData($fakeAdsclient, $updatedAdsclient->toArray());
        $dbAdsclient = $this->adsclientRepo->find($adsclient->id);
        $this->assertModelData($fakeAdsclient, $dbAdsclient->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteAdsclient()
    {
        $adsclient = $this->makeAdsclient();
        $resp = $this->adsclientRepo->delete($adsclient->id);
        $this->assertTrue($resp);
        $this->assertNull(Adsclient::find($adsclient->id), 'Adsclient should not exist in DB');
    }
}

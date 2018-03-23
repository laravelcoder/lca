<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateAdsclientAPIRequest;
use App\Http\Requests\API\UpdateAdsclientAPIRequest;
use App\Models\Adsclient;
use App\Repositories\AdsclientRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class AdsclientController
 * @package App\Http\Controllers\API
 */

class AdsclientAPIController extends AppBaseController
{
    /** @var  AdsclientRepository */
    private $adsclientRepository;

    public function __construct(AdsclientRepository $adsclientRepo)
    {
        $this->adsclientRepository = $adsclientRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/adsclients",
     *      summary="Get a listing of the Adsclients.",
     *      tags={"Adsclient"},
     *      description="Get all Adsclients",
     *      produces={"application/json"},
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="array",
     *                  @SWG\Items(ref="#/definitions/Adsclient")
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function index(Request $request)
    {
        $this->adsclientRepository->pushCriteria(new RequestCriteria($request));
        $this->adsclientRepository->pushCriteria(new LimitOffsetCriteria($request));
        $adsclients = $this->adsclientRepository->all();

        return $this->sendResponse($adsclients->toArray(), 'Adsclients retrieved successfully');
    }

    /**
     * @param CreateAdsclientAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/adsclients",
     *      summary="Store a newly created Adsclient in storage",
     *      tags={"Adsclient"},
     *      description="Store Adsclient",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Adsclient that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Adsclient")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Adsclient"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateAdsclientAPIRequest $request)
    {
        $input = $request->all();

        $adsclients = $this->adsclientRepository->create($input);

        return $this->sendResponse($adsclients->toArray(), 'Adsclient saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/adsclients/{id}",
     *      summary="Display the specified Adsclient",
     *      tags={"Adsclient"},
     *      description="Get Adsclient",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Adsclient",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Adsclient"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function show($id)
    {
        /** @var Adsclient $adsclient */
        $adsclient = $this->adsclientRepository->findWithoutFail($id);

        if (empty($adsclient)) {
            return $this->sendError('Adsclient not found');
        }

        return $this->sendResponse($adsclient->toArray(), 'Adsclient retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateAdsclientAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/adsclients/{id}",
     *      summary="Update the specified Adsclient in storage",
     *      tags={"Adsclient"},
     *      description="Update Adsclient",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Adsclient",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Adsclient that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Adsclient")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Adsclient"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateAdsclientAPIRequest $request)
    {
        $input = $request->all();

        /** @var Adsclient $adsclient */
        $adsclient = $this->adsclientRepository->findWithoutFail($id);

        if (empty($adsclient)) {
            return $this->sendError('Adsclient not found');
        }

        $adsclient = $this->adsclientRepository->update($input, $id);

        return $this->sendResponse($adsclient->toArray(), 'Adsclient updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/adsclients/{id}",
     *      summary="Remove the specified Adsclient from storage",
     *      tags={"Adsclient"},
     *      description="Delete Adsclient",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Adsclient",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="string"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function destroy($id)
    {
        /** @var Adsclient $adsclient */
        $adsclient = $this->adsclientRepository->findWithoutFail($id);

        if (empty($adsclient)) {
            return $this->sendError('Adsclient not found');
        }

        $adsclient->delete();

        return $this->sendResponse($id, 'Adsclient deleted successfully');
    }
}

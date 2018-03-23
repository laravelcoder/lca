<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateAnalyticsclientAPIRequest;
use App\Http\Requests\API\UpdateAnalyticsclientAPIRequest;
use App\Models\Analyticsclient;
use App\Repositories\AnalyticsclientRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class AnalyticsclientController
 * @package App\Http\Controllers\API
 */

class AnalyticsclientAPIController extends AppBaseController
{
    /** @var  AnalyticsclientRepository */
    private $analyticsclientRepository;

    public function __construct(AnalyticsclientRepository $analyticsclientRepo)
    {
        $this->analyticsclientRepository = $analyticsclientRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/analyticsclients",
     *      summary="Get a listing of the Analyticsclients.",
     *      tags={"Analyticsclient"},
     *      description="Get all Analyticsclients",
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
     *                  @SWG\Items(ref="#/definitions/Analyticsclient")
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
        $this->analyticsclientRepository->pushCriteria(new RequestCriteria($request));
        $this->analyticsclientRepository->pushCriteria(new LimitOffsetCriteria($request));
        $analyticsclients = $this->analyticsclientRepository->all();

        return $this->sendResponse($analyticsclients->toArray(), 'Analyticsclients retrieved successfully');
    }

    /**
     * @param CreateAnalyticsclientAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/analyticsclients",
     *      summary="Store a newly created Analyticsclient in storage",
     *      tags={"Analyticsclient"},
     *      description="Store Analyticsclient",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Analyticsclient that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Analyticsclient")
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
     *                  ref="#/definitions/Analyticsclient"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateAnalyticsclientAPIRequest $request)
    {
        $input = $request->all();

        $analyticsclients = $this->analyticsclientRepository->create($input);

        return $this->sendResponse($analyticsclients->toArray(), 'Analyticsclient saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/analyticsclients/{id}",
     *      summary="Display the specified Analyticsclient",
     *      tags={"Analyticsclient"},
     *      description="Get Analyticsclient",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Analyticsclient",
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
     *                  ref="#/definitions/Analyticsclient"
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
        /** @var Analyticsclient $analyticsclient */
        $analyticsclient = $this->analyticsclientRepository->findWithoutFail($id);

        if (empty($analyticsclient)) {
            return $this->sendError('Analyticsclient not found');
        }

        return $this->sendResponse($analyticsclient->toArray(), 'Analyticsclient retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateAnalyticsclientAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/analyticsclients/{id}",
     *      summary="Update the specified Analyticsclient in storage",
     *      tags={"Analyticsclient"},
     *      description="Update Analyticsclient",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Analyticsclient",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Analyticsclient that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Analyticsclient")
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
     *                  ref="#/definitions/Analyticsclient"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateAnalyticsclientAPIRequest $request)
    {
        $input = $request->all();

        /** @var Analyticsclient $analyticsclient */
        $analyticsclient = $this->analyticsclientRepository->findWithoutFail($id);

        if (empty($analyticsclient)) {
            return $this->sendError('Analyticsclient not found');
        }

        $analyticsclient = $this->analyticsclientRepository->update($input, $id);

        return $this->sendResponse($analyticsclient->toArray(), 'Analyticsclient updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/analyticsclients/{id}",
     *      summary="Remove the specified Analyticsclient from storage",
     *      tags={"Analyticsclient"},
     *      description="Delete Analyticsclient",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Analyticsclient",
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
        /** @var Analyticsclient $analyticsclient */
        $analyticsclient = $this->analyticsclientRepository->findWithoutFail($id);

        if (empty($analyticsclient)) {
            return $this->sendError('Analyticsclient not found');
        }

        $analyticsclient->delete();

        return $this->sendResponse($id, 'Analyticsclient deleted successfully');
    }
}

<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateZipcodeAPIRequest;
use App\Http\Requests\API\UpdateZipcodeAPIRequest;
use App\Models\Zipcode;
use App\Repositories\ZipcodeRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class ZipcodeController
 * @package App\Http\Controllers\API
 */

class ZipcodeAPIController extends AppBaseController
{
    /** @var  ZipcodeRepository */
    private $zipcodeRepository;

    public function __construct(ZipcodeRepository $zipcodeRepo)
    {
        $this->zipcodeRepository = $zipcodeRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/zipcodes",
     *      summary="Get a listing of the Zipcodes.",
     *      tags={"Zipcode"},
     *      description="Get all Zipcodes",
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
     *                  @SWG\Items(ref="#/definitions/Zipcode")
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
        $this->zipcodeRepository->pushCriteria(new RequestCriteria($request));
        $this->zipcodeRepository->pushCriteria(new LimitOffsetCriteria($request));
        $zipcodes = $this->zipcodeRepository->all();

        return $this->sendResponse($zipcodes->toArray(), 'Zipcodes retrieved successfully');
    }

    /**
     * @param CreateZipcodeAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/zipcodes",
     *      summary="Store a newly created Zipcode in storage",
     *      tags={"Zipcode"},
     *      description="Store Zipcode",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Zipcode that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Zipcode")
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
     *                  ref="#/definitions/Zipcode"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateZipcodeAPIRequest $request)
    {
        $input = $request->all();

        $zipcodes = $this->zipcodeRepository->create($input);

        return $this->sendResponse($zipcodes->toArray(), 'Zipcode saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/zipcodes/{id}",
     *      summary="Display the specified Zipcode",
     *      tags={"Zipcode"},
     *      description="Get Zipcode",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Zipcode",
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
     *                  ref="#/definitions/Zipcode"
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
        /** @var Zipcode $zipcode */
        $zipcode = $this->zipcodeRepository->findWithoutFail($id);

        if (empty($zipcode)) {
            return $this->sendError('Zipcode not found');
        }

        return $this->sendResponse($zipcode->toArray(), 'Zipcode retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateZipcodeAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/zipcodes/{id}",
     *      summary="Update the specified Zipcode in storage",
     *      tags={"Zipcode"},
     *      description="Update Zipcode",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Zipcode",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Zipcode that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Zipcode")
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
     *                  ref="#/definitions/Zipcode"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateZipcodeAPIRequest $request)
    {
        $input = $request->all();

        /** @var Zipcode $zipcode */
        $zipcode = $this->zipcodeRepository->findWithoutFail($id);

        if (empty($zipcode)) {
            return $this->sendError('Zipcode not found');
        }

        $zipcode = $this->zipcodeRepository->update($input, $id);

        return $this->sendResponse($zipcode->toArray(), 'Zipcode updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/zipcodes/{id}",
     *      summary="Remove the specified Zipcode from storage",
     *      tags={"Zipcode"},
     *      description="Delete Zipcode",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Zipcode",
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
        /** @var Zipcode $zipcode */
        $zipcode = $this->zipcodeRepository->findWithoutFail($id);

        if (empty($zipcode)) {
            return $this->sendError('Zipcode not found');
        }

        $zipcode->delete();

        return $this->sendResponse($id, 'Zipcode deleted successfully');
    }
}

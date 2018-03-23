<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateClinicAPIRequest;
use App\Http\Requests\API\UpdateClinicAPIRequest;
use App\Models\Clinic;
use App\Repositories\ClinicRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class ClinicController
 * @package App\Http\Controllers\API
 */

class ClinicAPIController extends AppBaseController
{
    /** @var  ClinicRepository */
    private $clinicRepository;

    public function __construct(ClinicRepository $clinicRepo)
    {
        $this->clinicRepository = $clinicRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/clinics",
     *      summary="Get a listing of the Clinics.",
     *      tags={"Clinic"},
     *      description="Get all Clinics",
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
     *                  @SWG\Items(ref="#/definitions/Clinic")
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
        $this->clinicRepository->pushCriteria(new RequestCriteria($request));
        $this->clinicRepository->pushCriteria(new LimitOffsetCriteria($request));
        $clinics = $this->clinicRepository->all();

        return $this->sendResponse($clinics->toArray(), 'Clinics retrieved successfully');
    }

    /**
     * @param CreateClinicAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/clinics",
     *      summary="Store a newly created Clinic in storage",
     *      tags={"Clinic"},
     *      description="Store Clinic",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Clinic that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Clinic")
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
     *                  ref="#/definitions/Clinic"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateClinicAPIRequest $request)
    {
        $input = $request->all();

        $clinics = $this->clinicRepository->create($input);

        return $this->sendResponse($clinics->toArray(), 'Clinic saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/clinics/{id}",
     *      summary="Display the specified Clinic",
     *      tags={"Clinic"},
     *      description="Get Clinic",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Clinic",
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
     *                  ref="#/definitions/Clinic"
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
        /** @var Clinic $clinic */
        $clinic = $this->clinicRepository->findWithoutFail($id);

        if (empty($clinic)) {
            return $this->sendError('Clinic not found');
        }

        return $this->sendResponse($clinic->toArray(), 'Clinic retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateClinicAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/clinics/{id}",
     *      summary="Update the specified Clinic in storage",
     *      tags={"Clinic"},
     *      description="Update Clinic",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Clinic",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Clinic that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Clinic")
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
     *                  ref="#/definitions/Clinic"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateClinicAPIRequest $request)
    {
        $input = $request->all();

        /** @var Clinic $clinic */
        $clinic = $this->clinicRepository->findWithoutFail($id);

        if (empty($clinic)) {
            return $this->sendError('Clinic not found');
        }

        $clinic = $this->clinicRepository->update($input, $id);

        return $this->sendResponse($clinic->toArray(), 'Clinic updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/clinics/{id}",
     *      summary="Remove the specified Clinic from storage",
     *      tags={"Clinic"},
     *      description="Delete Clinic",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Clinic",
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
        /** @var Clinic $clinic */
        $clinic = $this->clinicRepository->findWithoutFail($id);

        if (empty($clinic)) {
            return $this->sendError('Clinic not found');
        }

        $clinic->delete();

        return $this->sendResponse($id, 'Clinic deleted successfully');
    }
}

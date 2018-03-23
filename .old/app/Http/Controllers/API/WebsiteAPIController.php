<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateWebsiteAPIRequest;
use App\Http\Requests\API\UpdateWebsiteAPIRequest;
use App\Models\Website;
use App\Repositories\WebsiteRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class WebsiteController
 * @package App\Http\Controllers\API
 */

class WebsiteAPIController extends AppBaseController
{
    /** @var  WebsiteRepository */
    private $websiteRepository;

    public function __construct(WebsiteRepository $websiteRepo)
    {
        $this->websiteRepository = $websiteRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/websites",
     *      summary="Get a listing of the Websites.",
     *      tags={"Website"},
     *      description="Get all Websites",
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
     *                  @SWG\Items(ref="#/definitions/Website")
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
        $this->websiteRepository->pushCriteria(new RequestCriteria($request));
        $this->websiteRepository->pushCriteria(new LimitOffsetCriteria($request));
        $websites = $this->websiteRepository->all();

        return $this->sendResponse($websites->toArray(), 'Websites retrieved successfully');
    }

    /**
     * @param CreateWebsiteAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/websites",
     *      summary="Store a newly created Website in storage",
     *      tags={"Website"},
     *      description="Store Website",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Website that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Website")
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
     *                  ref="#/definitions/Website"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateWebsiteAPIRequest $request)
    {
        $input = $request->all();

        $websites = $this->websiteRepository->create($input);

        return $this->sendResponse($websites->toArray(), 'Website saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/websites/{id}",
     *      summary="Display the specified Website",
     *      tags={"Website"},
     *      description="Get Website",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Website",
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
     *                  ref="#/definitions/Website"
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
        /** @var Website $website */
        $website = $this->websiteRepository->findWithoutFail($id);

        if (empty($website)) {
            return $this->sendError('Website not found');
        }

        return $this->sendResponse($website->toArray(), 'Website retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateWebsiteAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/websites/{id}",
     *      summary="Update the specified Website in storage",
     *      tags={"Website"},
     *      description="Update Website",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Website",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Website that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Website")
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
     *                  ref="#/definitions/Website"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateWebsiteAPIRequest $request)
    {
        $input = $request->all();

        /** @var Website $website */
        $website = $this->websiteRepository->findWithoutFail($id);

        if (empty($website)) {
            return $this->sendError('Website not found');
        }

        $website = $this->websiteRepository->update($input, $id);

        return $this->sendResponse($website->toArray(), 'Website updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/websites/{id}",
     *      summary="Remove the specified Website from storage",
     *      tags={"Website"},
     *      description="Delete Website",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Website",
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
        /** @var Website $website */
        $website = $this->websiteRepository->findWithoutFail($id);

        if (empty($website)) {
            return $this->sendError('Website not found');
        }

        $website->delete();

        return $this->sendResponse($id, 'Website deleted successfully');
    }
}

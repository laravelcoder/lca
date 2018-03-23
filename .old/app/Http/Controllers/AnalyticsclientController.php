<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAnalyticsclientRequest;
use App\Http\Requests\UpdateAnalyticsclientRequest;
use App\Repositories\AnalyticsclientRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AnalyticsclientController extends AppBaseController
{
    /** @var  AnalyticsclientRepository */
    private $analyticsclientRepository;

    public function __construct(AnalyticsclientRepository $analyticsclientRepo)
    {
        $this->analyticsclientRepository = $analyticsclientRepo;
    }

    /**
     * Display a listing of the Analyticsclient.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->analyticsclientRepository->pushCriteria(new RequestCriteria($request));
        $analyticsclients = $this->analyticsclientRepository->all();

        return view('analyticsclients.index')
            ->with('analyticsclients', $analyticsclients);
    }

    /**
     * Show the form for creating a new Analyticsclient.
     *
     * @return Response
     */
    public function create()
    {
        return view('analyticsclients.create');
    }

    /**
     * Store a newly created Analyticsclient in storage.
     *
     * @param CreateAnalyticsclientRequest $request
     *
     * @return Response
     */
    public function store(CreateAnalyticsclientRequest $request)
    {
        $input = $request->all();

        $analyticsclient = $this->analyticsclientRepository->create($input);

        Flash::success('Analyticsclient saved successfully.');

        return redirect(route('analyticsclients.index'));
    }

    /**
     * Display the specified Analyticsclient.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $analyticsclient = $this->analyticsclientRepository->findWithoutFail($id);

        if (empty($analyticsclient)) {
            Flash::error('Analyticsclient not found');

            return redirect(route('analyticsclients.index'));
        }

        return view('analyticsclients.show')->with('analyticsclient', $analyticsclient);
    }

    /**
     * Show the form for editing the specified Analyticsclient.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $analyticsclient = $this->analyticsclientRepository->findWithoutFail($id);

        if (empty($analyticsclient)) {
            Flash::error('Analyticsclient not found');

            return redirect(route('analyticsclients.index'));
        }

        return view('analyticsclients.edit')->with('analyticsclient', $analyticsclient);
    }

    /**
     * Update the specified Analyticsclient in storage.
     *
     * @param  int              $id
     * @param UpdateAnalyticsclientRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAnalyticsclientRequest $request)
    {
        $analyticsclient = $this->analyticsclientRepository->findWithoutFail($id);

        if (empty($analyticsclient)) {
            Flash::error('Analyticsclient not found');

            return redirect(route('analyticsclients.index'));
        }

        $analyticsclient = $this->analyticsclientRepository->update($request->all(), $id);

        Flash::success('Analyticsclient updated successfully.');

        return redirect(route('analyticsclients.index'));
    }

    /**
     * Remove the specified Analyticsclient from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $analyticsclient = $this->analyticsclientRepository->findWithoutFail($id);

        if (empty($analyticsclient)) {
            Flash::error('Analyticsclient not found');

            return redirect(route('analyticsclients.index'));
        }

        $this->analyticsclientRepository->delete($id);

        Flash::success('Analyticsclient deleted successfully.');

        return redirect(route('analyticsclients.index'));
    }
}

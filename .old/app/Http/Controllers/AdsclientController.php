<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAdsclientRequest;
use App\Http\Requests\UpdateAdsclientRequest;
use App\Repositories\AdsclientRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AdsclientController extends AppBaseController
{
    /** @var  AdsclientRepository */
    private $adsclientRepository;

    public function __construct(AdsclientRepository $adsclientRepo)
    {
        $this->adsclientRepository = $adsclientRepo;
    }

    /**
     * Display a listing of the Adsclient.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->adsclientRepository->pushCriteria(new RequestCriteria($request));
        $adsclients = $this->adsclientRepository->all();

        return view('adsclients.index')
            ->with('adsclients', $adsclients);
    }

    /**
     * Show the form for creating a new Adsclient.
     *
     * @return Response
     */
    public function create()
    {
        return view('adsclients.create');
    }

    /**
     * Store a newly created Adsclient in storage.
     *
     * @param CreateAdsclientRequest $request
     *
     * @return Response
     */
    public function store(CreateAdsclientRequest $request)
    {
        $input = $request->all();

        $adsclient = $this->adsclientRepository->create($input);

        Flash::success('Adsclient saved successfully.');

        return redirect(route('adsclients.index'));
    }

    /**
     * Display the specified Adsclient.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show(Adsclient $adsclient)
    {
        $adsclient = $this->adsclientRepository->findWithoutFail($id);

        if (empty($adsclient)) {
            Flash::error('Adsclient not found');

            return redirect(route('adsclients.index'));
        }

        return view('adsclients.show')->with('adsclient', $adsclient);
    }

    /**
     * Show the form for editing the specified Adsclient.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit(Adsclient $adsclient)
    {
        $adsclient = $this->adsclientRepository->findWithoutFail($id);

        if (empty($adsclient)) {
            Flash::error('Adsclient not found');

            return redirect(route('adsclients.index'));
        }

        return view('adsclients.edit')->with('adsclient', $adsclient);
    }

    /**
     * Update the specified Adsclient in storage.
     *
     * @param  int              $id
     * @param UpdateAdsclientRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAdsclientRequest $request)
    {
        $adsclient = $this->adsclientRepository->findWithoutFail($id);

        if (empty($adsclient)) {
            Flash::error('Adsclient not found');

            return redirect(route('adsclients.index'));
        }

        $adsclient = $this->adsclientRepository->update($request->all(), $id);

        Flash::success('Adsclient updated successfully.');

        return redirect(route('adsclients.index'));
    }

    /**
     * Remove the specified Adsclient from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy(Adsclient $adsclient)
    {
        $adsclient = $this->adsclientRepository->findWithoutFail($id);

        if (empty($adsclient)) {
            Flash::error('Adsclient not found');

            return redirect(route('adsclients.index'));
        }

        $this->adsclientRepository->delete($id);

        Flash::success('Adsclient deleted successfully.');

        return redirect(route('adsclients.index'));
    }
}

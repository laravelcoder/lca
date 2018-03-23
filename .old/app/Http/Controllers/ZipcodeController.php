<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateZipcodeRequest;
use App\Http\Requests\UpdateZipcodeRequest;
use App\Repositories\ZipcodeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ZipcodeController extends AppBaseController
{
    /** @var  ZipcodeRepository */
    private $zipcodeRepository;

    public function __construct(ZipcodeRepository $zipcodeRepo)
    {
        $this->zipcodeRepository = $zipcodeRepo;
    }

    /**
     * Display a listing of the Zipcode.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->zipcodeRepository->pushCriteria(new RequestCriteria($request));
        $zipcodes = $this->zipcodeRepository->all();

        return view('zipcodes.index')
            ->with('zipcodes', $zipcodes);
    }

    /**
     * Show the form for creating a new Zipcode.
     *
     * @return Response
     */
    public function create()
    {
        return view('zipcodes.create');
    }

    /**
     * Store a newly created Zipcode in storage.
     *
     * @param CreateZipcodeRequest $request
     *
     * @return Response
     */
    public function store(CreateZipcodeRequest $request)
    {
        $input = $request->all();

        $zipcode = $this->zipcodeRepository->create($input);

        Flash::success('Zipcode saved successfully.');

        return redirect(route('zipcodes.index'));
    }

    /**
     * Display the specified Zipcode.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $zipcode = $this->zipcodeRepository->findWithoutFail($id);

        if (empty($zipcode)) {
            Flash::error('Zipcode not found');

            return redirect(route('zipcodes.index'));
        }

        return view('zipcodes.show')->with('zipcode', $zipcode);
    }

    /**
     * Show the form for editing the specified Zipcode.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $zipcode = $this->zipcodeRepository->findWithoutFail($id);

        if (empty($zipcode)) {
            Flash::error('Zipcode not found');

            return redirect(route('zipcodes.index'));
        }

        return view('zipcodes.edit')->with('zipcode', $zipcode);
    }

    /**
     * Update the specified Zipcode in storage.
     *
     * @param  int              $id
     * @param UpdateZipcodeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateZipcodeRequest $request)
    {
        $zipcode = $this->zipcodeRepository->findWithoutFail($id);

        if (empty($zipcode)) {
            Flash::error('Zipcode not found');

            return redirect(route('zipcodes.index'));
        }

        $zipcode = $this->zipcodeRepository->update($request->all(), $id);

        Flash::success('Zipcode updated successfully.');

        return redirect(route('zipcodes.index'));
    }

    /**
     * Remove the specified Zipcode from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $zipcode = $this->zipcodeRepository->findWithoutFail($id);

        if (empty($zipcode)) {
            Flash::error('Zipcode not found');

            return redirect(route('zipcodes.index'));
        }

        $this->zipcodeRepository->delete($id);

        Flash::success('Zipcode deleted successfully.');

        return redirect(route('zipcodes.index'));
    }
}

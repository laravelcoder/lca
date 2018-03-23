<?php

namespace App\Http\Controllers\Admin;

use App\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreLocationsRequest;
use App\Http\Requests\Admin\UpdateLocationsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class LocationsController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of Location.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('location_access')) {
            return abort(401);
        }
        if ($filterBy = Input::get('filter')) {
            if ($filterBy == 'all') {
                Session::put('Location.filter', 'all');
            } elseif ($filterBy == 'my') {
                Session::put('Location.filter', 'my');
            }
        }

        if (request('show_deleted') == 1) {
            if (! Gate::allows('location_delete')) {
                return abort(401);
            }
            $locations = Location::onlyTrashed()->get();
        } else {
            $locations = Location::all();
        }

        return view('admin.locations.index', compact('locations'));
    }

    /**
     * Show the form for creating new Location.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('location_create')) {
            return abort(401);
        }
        
        $companies = \App\ContactCompany::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $created_bies = \App\User::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.locations.create', compact('companies', 'created_bies'));
    }

    /**
     * Store a newly created Location in storage.
     *
     * @param  \App\Http\Requests\StoreLocationsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLocationsRequest $request)
    {
        if (! Gate::allows('location_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $location = Location::create($request->all());

        foreach ($request->input('zipcodes', []) as $data) {
            $location->zipcodes()->create($data);
        }
        foreach ($request->input('websites', []) as $data) {
            $location->websites()->create($data);
        }


        return redirect()->route('admin.locations.index');
    }


    /**
     * Show the form for editing Location.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('location_edit')) {
            return abort(401);
        }
        
        $companies = \App\ContactCompany::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $created_bies = \App\User::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $location = Location::findOrFail($id);

        return view('admin.locations.edit', compact('location', 'companies', 'created_bies'));
    }

    /**
     * Update Location in storage.
     *
     * @param  \App\Http\Requests\UpdateLocationsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLocationsRequest $request, $id)
    {
        if (! Gate::allows('location_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $location = Location::findOrFail($id);
        $location->update($request->all());

        $zipcodes           = $location->zipcodes;
        $currentZipcodeData = [];
        foreach ($request->input('zipcodes', []) as $index => $data) {
            if (is_integer($index)) {
                $location->zipcodes()->create($data);
            } else {
                $id                          = explode('-', $index)[1];
                $currentZipcodeData[$id] = $data;
            }
        }
        foreach ($zipcodes as $item) {
            if (isset($currentZipcodeData[$item->id])) {
                $item->update($currentZipcodeData[$item->id]);
            } else {
                $item->delete();
            }
        }
        $websites           = $location->websites;
        $currentWebsiteData = [];
        foreach ($request->input('websites', []) as $index => $data) {
            if (is_integer($index)) {
                $location->websites()->create($data);
            } else {
                $id                          = explode('-', $index)[1];
                $currentWebsiteData[$id] = $data;
            }
        }
        foreach ($websites as $item) {
            if (isset($currentWebsiteData[$item->id])) {
                $item->update($currentWebsiteData[$item->id]);
            } else {
                $item->delete();
            }
        }


        return redirect()->route('admin.locations.index');
    }


    /**
     * Display Location.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('location_view')) {
            return abort(401);
        }
        
        $companies = \App\ContactCompany::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $created_bies = \App\User::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');$zipcodes = \App\Zipcode::where('location_id', $id)->get();$websites = \App\Website::where('location_id', $id)->get();$bookings = \App\Booking::where('requested_clinic_id', $id)->get();$bookings = \App\Booking::where('clinic_id', $id)->get();$bookings = \App\Booking::where('clinic_address_id', $id)->get();$bookings = \App\Booking::where('clinic_phone_id', $id)->get();

        $location = Location::findOrFail($id);

        return view('admin.locations.show', compact('location', 'zipcodes', 'websites', 'bookings', 'bookings', 'bookings', 'bookings'));
    }


    /**
     * Remove Location from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('location_delete')) {
            return abort(401);
        }
        $location = Location::findOrFail($id);
        $location->delete();

        return redirect()->route('admin.locations.index');
    }

    /**
     * Delete all selected Location at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('location_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Location::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Location from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('location_delete')) {
            return abort(401);
        }
        $location = Location::onlyTrashed()->findOrFail($id);
        $location->restore();

        return redirect()->route('admin.locations.index');
    }

    /**
     * Permanently delete Location from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('location_delete')) {
            return abort(401);
        }
        $location = Location::onlyTrashed()->findOrFail($id);
        $location->forceDelete();

        return redirect()->route('admin.locations.index');
    }
}

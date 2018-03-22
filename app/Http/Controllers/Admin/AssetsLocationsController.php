<?php

namespace App\Http\Controllers\Admin;

use App\AssetsLocation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAssetsLocationsRequest;
use App\Http\Requests\Admin\UpdateAssetsLocationsRequest;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class AssetsLocationsController extends Controller
{
    /**
     * Display a listing of AssetsLocation.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('assets_location_access')) {
            return abort(401);
        }


                $assets_locations = AssetsLocation::all();

        return view('admin.assets_locations.index', compact('assets_locations'));
    }

    /**
     * Show the form for creating new AssetsLocation.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('assets_location_create')) {
            return abort(401);
        }
        return view('admin.assets_locations.create');
    }

    /**
     * Store a newly created AssetsLocation in storage.
     *
     * @param  \App\Http\Requests\StoreAssetsLocationsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAssetsLocationsRequest $request)
    {
        if (! Gate::allows('assets_location_create')) {
            return abort(401);
        }
        $assets_location = AssetsLocation::create($request->all());



        return redirect()->route('admin.assets_locations.index');
    }


    /**
     * Show the form for editing AssetsLocation.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('assets_location_edit')) {
            return abort(401);
        }
        $assets_location = AssetsLocation::findOrFail($id);

        return view('admin.assets_locations.edit', compact('assets_location'));
    }

    /**
     * Update AssetsLocation in storage.
     *
     * @param  \App\Http\Requests\UpdateAssetsLocationsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAssetsLocationsRequest $request, $id)
    {
        if (! Gate::allows('assets_location_edit')) {
            return abort(401);
        }
        $assets_location = AssetsLocation::findOrFail($id);
        $assets_location->update($request->all());



        return redirect()->route('admin.assets_locations.index');
    }


    /**
     * Display AssetsLocation.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('assets_location_view')) {
            return abort(401);
        }
        $assets_histories = \App\AssetsHistory::where('location_id', $id)->get();$assets = \App\Asset::where('location_id', $id)->get();

        $assets_location = AssetsLocation::findOrFail($id);

        return view('admin.assets_locations.show', compact('assets_location', 'assets_histories', 'assets'));
    }


    /**
     * Remove AssetsLocation from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('assets_location_delete')) {
            return abort(401);
        }
        $assets_location = AssetsLocation::findOrFail($id);
        $assets_location->delete();

        return redirect()->route('admin.assets_locations.index');
    }

    /**
     * Delete all selected AssetsLocation at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('assets_location_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = AssetsLocation::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}

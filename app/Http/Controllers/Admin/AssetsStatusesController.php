<?php

namespace App\Http\Controllers\Admin;

use App\AssetsStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAssetsStatusesRequest;
use App\Http\Requests\Admin\UpdateAssetsStatusesRequest;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class AssetsStatusesController extends Controller
{
    /**
     * Display a listing of AssetsStatus.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('assets_status_access')) {
            return abort(401);
        }


                $assets_statuses = AssetsStatus::all();

        return view('admin.assets_statuses.index', compact('assets_statuses'));
    }

    /**
     * Show the form for creating new AssetsStatus.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('assets_status_create')) {
            return abort(401);
        }
        return view('admin.assets_statuses.create');
    }

    /**
     * Store a newly created AssetsStatus in storage.
     *
     * @param  \App\Http\Requests\StoreAssetsStatusesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAssetsStatusesRequest $request)
    {
        if (! Gate::allows('assets_status_create')) {
            return abort(401);
        }
        $assets_status = AssetsStatus::create($request->all());



        return redirect()->route('admin.assets_statuses.index');
    }


    /**
     * Show the form for editing AssetsStatus.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('assets_status_edit')) {
            return abort(401);
        }
        $assets_status = AssetsStatus::findOrFail($id);

        return view('admin.assets_statuses.edit', compact('assets_status'));
    }

    /**
     * Update AssetsStatus in storage.
     *
     * @param  \App\Http\Requests\UpdateAssetsStatusesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAssetsStatusesRequest $request, $id)
    {
        if (! Gate::allows('assets_status_edit')) {
            return abort(401);
        }
        $assets_status = AssetsStatus::findOrFail($id);
        $assets_status->update($request->all());



        return redirect()->route('admin.assets_statuses.index');
    }


    /**
     * Display AssetsStatus.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('assets_status_view')) {
            return abort(401);
        }
        $assets_histories = \App\AssetsHistory::where('status_id', $id)->get();$assets = \App\Asset::where('status_id', $id)->get();

        $assets_status = AssetsStatus::findOrFail($id);

        return view('admin.assets_statuses.show', compact('assets_status', 'assets_histories', 'assets'));
    }


    /**
     * Remove AssetsStatus from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('assets_status_delete')) {
            return abort(401);
        }
        $assets_status = AssetsStatus::findOrFail($id);
        $assets_status->delete();

        return redirect()->route('admin.assets_statuses.index');
    }

    /**
     * Delete all selected AssetsStatus at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('assets_status_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = AssetsStatus::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}

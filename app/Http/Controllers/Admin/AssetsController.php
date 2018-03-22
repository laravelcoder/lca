<?php

namespace App\Http\Controllers\Admin;

use App\Asset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAssetsRequest;
use App\Http\Requests\Admin\UpdateAssetsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class AssetsController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of Asset.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('asset_access')) {
            return abort(401);
        }


                $assets = Asset::all();

        return view('admin.assets.index', compact('assets'));
    }

    /**
     * Show the form for creating new Asset.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('asset_create')) {
            return abort(401);
        }
        
        $categories = \App\AssetsCategory::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $statuses = \App\AssetsStatus::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $locations = \App\AssetsLocation::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $assigned_users = \App\User::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $assigned_clinics = \App\ContactCompany::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.assets.create', compact('categories', 'statuses', 'locations', 'assigned_users', 'assigned_clinics'));
    }

    /**
     * Store a newly created Asset in storage.
     *
     * @param  \App\Http\Requests\StoreAssetsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAssetsRequest $request)
    {
        if (! Gate::allows('asset_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $asset = Asset::create($request->all());



        return redirect()->route('admin.assets.index');
    }


    /**
     * Show the form for editing Asset.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('asset_edit')) {
            return abort(401);
        }
        
        $categories = \App\AssetsCategory::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $statuses = \App\AssetsStatus::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $locations = \App\AssetsLocation::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $assigned_users = \App\User::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $assigned_clinics = \App\ContactCompany::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $asset = Asset::findOrFail($id);

        return view('admin.assets.edit', compact('asset', 'categories', 'statuses', 'locations', 'assigned_users', 'assigned_clinics'));
    }

    /**
     * Update Asset in storage.
     *
     * @param  \App\Http\Requests\UpdateAssetsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAssetsRequest $request, $id)
    {
        if (! Gate::allows('asset_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $asset = Asset::findOrFail($id);
        $asset->update($request->all());



        return redirect()->route('admin.assets.index');
    }


    /**
     * Display Asset.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('asset_view')) {
            return abort(401);
        }
        
        $categories = \App\AssetsCategory::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $statuses = \App\AssetsStatus::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $locations = \App\AssetsLocation::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $assigned_users = \App\User::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $assigned_clinics = \App\ContactCompany::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');$assets_histories = \App\AssetsHistory::where('asset_id', $id)->get();

        $asset = Asset::findOrFail($id);

        return view('admin.assets.show', compact('asset', 'assets_histories'));
    }


    /**
     * Remove Asset from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('asset_delete')) {
            return abort(401);
        }
        $asset = Asset::findOrFail($id);
        $asset->delete();

        return redirect()->route('admin.assets.index');
    }

    /**
     * Delete all selected Asset at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('asset_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Asset::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}

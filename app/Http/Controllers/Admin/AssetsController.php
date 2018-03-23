<?php

namespace App\Http\Controllers\Admin;

use App\Asset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAssetsRequest;
use App\Http\Requests\Admin\UpdateAssetsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use Yajra\DataTables\DataTables;

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


        
        if (request()->ajax()) {
            $query = Asset::query();
            $query->with("category");
            $query->with("status");
            $query->with("location");
            $query->with("assigned_user");
            $query->with("assigned_clinic");
            $template = 'actionsTemplate';
            
            $query->select([
                'assets.id',
                'assets.category_id',
                'assets.serial_number',
                'assets.title',
                'assets.photo1',
                'assets.photo2',
                'assets.photo3',
                'assets.status_id',
                'assets.location_id',
                'assets.assigned_user_id',
                'assets.notes',
                'assets.assigned_clinic_id',
            ]);
            $table = Datatables::of($query);

            $table->setRowAttr([
                'data-entry-id' => '{{$id}}',
            ]);
            $table->addColumn('massDelete', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');
            $table->editColumn('actions', function ($row) use ($template) {
                $gateKey  = 'asset_';
                $routeKey = 'admin.assets';

                return view($template, compact('row', 'gateKey', 'routeKey'));
            });
            $table->editColumn('category.title', function ($row) {
                return $row->category ? $row->category->title : '';
            });
            $table->editColumn('serial_number', function ($row) {
                return $row->serial_number ? $row->serial_number : '';
            });
            $table->editColumn('title', function ($row) {
                return $row->title ? $row->title : '';
            });
            $table->editColumn('photo1', function ($row) {
                if($row->photo1) { return '<a href="'. asset(env('UPLOAD_PATH').'/' . $row->photo1) .'" target="_blank"><img src="'. asset(env('UPLOAD_PATH').'/thumb/' . $row->photo1) .'"/>'; };
            });
            $table->editColumn('photo2', function ($row) {
                if($row->photo2) { return '<a href="'. asset(env('UPLOAD_PATH').'/' . $row->photo2) .'" target="_blank"><img src="'. asset(env('UPLOAD_PATH').'/thumb/' . $row->photo2) .'"/>'; };
            });
            $table->editColumn('photo3', function ($row) {
                if($row->photo3) { return '<a href="'. asset(env('UPLOAD_PATH').'/' . $row->photo3) .'" target="_blank"><img src="'. asset(env('UPLOAD_PATH').'/thumb/' . $row->photo3) .'"/>'; };
            });
            $table->editColumn('status.title', function ($row) {
                return $row->status ? $row->status->title : '';
            });
            $table->editColumn('location.title', function ($row) {
                return $row->location ? $row->location->title : '';
            });
            $table->editColumn('assigned_user.name', function ($row) {
                return $row->assigned_user ? $row->assigned_user->name : '';
            });
            $table->editColumn('notes', function ($row) {
                return $row->notes ? $row->notes : '';
            });
            $table->editColumn('assigned_clinic.name', function ($row) {
                return $row->assigned_clinic ? $row->assigned_clinic->name : '';
            });

            $table->rawColumns(['actions','massDelete','photo1','photo2','photo3']);

            return $table->make(true);
        }

        return view('admin.assets.index');
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

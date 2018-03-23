<?php

namespace App\Http\Controllers\Admin;

use App\Zipcode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreZipcodesRequest;
use App\Http\Requests\Admin\UpdateZipcodesRequest;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class ZipcodesController extends Controller
{
    /**
     * Display a listing of Zipcode.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('zipcode_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('zipcode_delete')) {
                return abort(401);
            }
            $zipcodes = Zipcode::onlyTrashed()->get();
        } else {
            $zipcodes = Zipcode::all();
        }

        return view('admin.zipcodes.index', compact('zipcodes'));
    }

    /**
     * Show the form for creating new Zipcode.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('zipcode_create')) {
            return abort(401);
        }
        
        $locations = \App\Location::get()->pluck('city', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.zipcodes.create', compact('locations'));
    }

    /**
     * Store a newly created Zipcode in storage.
     *
     * @param  \App\Http\Requests\StoreZipcodesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreZipcodesRequest $request)
    {
        if (! Gate::allows('zipcode_create')) {
            return abort(401);
        }
        $zipcode = Zipcode::create($request->all());



        return redirect()->route('admin.zipcodes.index');
    }


    /**
     * Show the form for editing Zipcode.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('zipcode_edit')) {
            return abort(401);
        }
        
        $locations = \App\Location::get()->pluck('city', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $zipcode = Zipcode::findOrFail($id);

        return view('admin.zipcodes.edit', compact('zipcode', 'locations'));
    }

    /**
     * Update Zipcode in storage.
     *
     * @param  \App\Http\Requests\UpdateZipcodesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateZipcodesRequest $request, $id)
    {
        if (! Gate::allows('zipcode_edit')) {
            return abort(401);
        }
        $zipcode = Zipcode::findOrFail($id);
        $zipcode->update($request->all());



        return redirect()->route('admin.zipcodes.index');
    }


    /**
     * Display Zipcode.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('zipcode_view')) {
            return abort(401);
        }
        $zipcode = Zipcode::findOrFail($id);

        return view('admin.zipcodes.show', compact('zipcode'));
    }


    /**
     * Remove Zipcode from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('zipcode_delete')) {
            return abort(401);
        }
        $zipcode = Zipcode::findOrFail($id);
        $zipcode->delete();

        return redirect()->route('admin.zipcodes.index');
    }

    /**
     * Delete all selected Zipcode at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('zipcode_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Zipcode::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Zipcode from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('zipcode_delete')) {
            return abort(401);
        }
        $zipcode = Zipcode::onlyTrashed()->findOrFail($id);
        $zipcode->restore();

        return redirect()->route('admin.zipcodes.index');
    }

    /**
     * Permanently delete Zipcode from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('zipcode_delete')) {
            return abort(401);
        }
        $zipcode = Zipcode::onlyTrashed()->findOrFail($id);
        $zipcode->forceDelete();

        return redirect()->route('admin.zipcodes.index');
    }
}

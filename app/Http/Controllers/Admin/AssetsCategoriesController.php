<?php

namespace App\Http\Controllers\Admin;

use App\AssetsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAssetsCategoriesRequest;
use App\Http\Requests\Admin\UpdateAssetsCategoriesRequest;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class AssetsCategoriesController extends Controller
{
    /**
     * Display a listing of AssetsCategory.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('assets_category_access')) {
            return abort(401);
        }


                $assets_categories = AssetsCategory::all();

        return view('admin.assets_categories.index', compact('assets_categories'));
    }

    /**
     * Show the form for creating new AssetsCategory.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('assets_category_create')) {
            return abort(401);
        }
        return view('admin.assets_categories.create');
    }

    /**
     * Store a newly created AssetsCategory in storage.
     *
     * @param  \App\Http\Requests\StoreAssetsCategoriesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAssetsCategoriesRequest $request)
    {
        if (! Gate::allows('assets_category_create')) {
            return abort(401);
        }
        $assets_category = AssetsCategory::create($request->all());



        return redirect()->route('admin.assets_categories.index');
    }


    /**
     * Show the form for editing AssetsCategory.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('assets_category_edit')) {
            return abort(401);
        }
        $assets_category = AssetsCategory::findOrFail($id);

        return view('admin.assets_categories.edit', compact('assets_category'));
    }

    /**
     * Update AssetsCategory in storage.
     *
     * @param  \App\Http\Requests\UpdateAssetsCategoriesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAssetsCategoriesRequest $request, $id)
    {
        if (! Gate::allows('assets_category_edit')) {
            return abort(401);
        }
        $assets_category = AssetsCategory::findOrFail($id);
        $assets_category->update($request->all());



        return redirect()->route('admin.assets_categories.index');
    }


    /**
     * Display AssetsCategory.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('assets_category_view')) {
            return abort(401);
        }
        $assets = \App\Asset::where('category_id', $id)->get();

        $assets_category = AssetsCategory::findOrFail($id);

        return view('admin.assets_categories.show', compact('assets_category', 'assets'));
    }


    /**
     * Remove AssetsCategory from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('assets_category_delete')) {
            return abort(401);
        }
        $assets_category = AssetsCategory::findOrFail($id);
        $assets_category->delete();

        return redirect()->route('admin.assets_categories.index');
    }

    /**
     * Delete all selected AssetsCategory at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('assets_category_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = AssetsCategory::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}

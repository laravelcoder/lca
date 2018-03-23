<?php

namespace App\Http\Controllers\Api\V1;

use App\Asset;
use Illuminate\Http\Request;
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

    public function index()
    {
        return Asset::all();
    }

    public function show($id)
    {
        return Asset::findOrFail($id);
    }

    public function update(UpdateAssetsRequest $request, $id)
    {
        $request = $this->saveFiles($request);
        $asset = Asset::findOrFail($id);
        $asset->update($request->all());
        

        return $asset;
    }

    public function store(StoreAssetsRequest $request)
    {
        $request = $this->saveFiles($request);
        $asset = Asset::create($request->all());
        

        return $asset;
    }

    public function destroy($id)
    {
        $asset = Asset::findOrFail($id);
        $asset->delete();
        return '';
    }
}

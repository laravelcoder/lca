<?php

namespace App\Http\Controllers\Api\V1;

use App\Website;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreWebsitesRequest;
use App\Http\Requests\Admin\UpdateWebsitesRequest;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class WebsitesController extends Controller
{
    public function index()
    {
        return Website::all();
    }

    public function show($id)
    {
        return Website::findOrFail($id);
    }

    public function update(UpdateWebsitesRequest $request, $id)
    {
        $website = Website::findOrFail($id);
        $website->update($request->all());
        
        $adwords           = $website->adwords;
        $currentAdwordData = [];
        foreach ($request->input('adwords', []) as $index => $data) {
            if (is_integer($index)) {
                $website->adwords()->create($data);
            } else {
                $id                          = explode('-', $index)[1];
                $currentAdwordData[$id] = $data;
            }
        }
        foreach ($adwords as $item) {
            if (isset($currentAdwordData[$item->id])) {
                $item->update($currentAdwordData[$item->id]);
            } else {
                $item->delete();
            }
        }
        $analytics           = $website->analytics;
        $currentAnalyticData = [];
        foreach ($request->input('analytics', []) as $index => $data) {
            if (is_integer($index)) {
                $website->analytics()->create($data);
            } else {
                $id                          = explode('-', $index)[1];
                $currentAnalyticData[$id] = $data;
            }
        }
        foreach ($analytics as $item) {
            if (isset($currentAnalyticData[$item->id])) {
                $item->update($currentAnalyticData[$item->id]);
            } else {
                $item->delete();
            }
        }

        return $website;
    }

    public function store(StoreWebsitesRequest $request)
    {
        $website = Website::create($request->all());
        
        foreach ($request->input('adwords', []) as $data) {
            $website->adwords()->create($data);
        }
        foreach ($request->input('analytics', []) as $data) {
            $website->analytics()->create($data);
        }

        return $website;
    }

    public function destroy($id)
    {
        $website = Website::findOrFail($id);
        $website->delete();
        return '';
    }
}

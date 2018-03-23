<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;

class LcaDashboardsController extends Controller
{
    public function index()
    {
        if (! Gate::allows('lca_dashboard_access')) {
            return abort(401);
        }
        return view('admin.lca_dashboards.index');
    }
}

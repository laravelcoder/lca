<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;

class BookingDashboardsController extends Controller
{
    public function index()
    {
        if (! Gate::allows('booking_dashboard_access')) {
            return abort(401);
        }
        return view('admin.booking_dashboards.index');
    }
}

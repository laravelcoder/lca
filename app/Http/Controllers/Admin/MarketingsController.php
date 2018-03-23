<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;

class MarketingsController extends Controller
{
    public function index()
    {
        if (! Gate::allows('marketing_access')) {
            return abort(401);
        }
        return view('admin.marketings.index');
    }
}

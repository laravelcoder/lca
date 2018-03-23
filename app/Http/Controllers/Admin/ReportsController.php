<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Booking;

class ReportsController extends Controller
{
    public function bookingsReport()
    {
        $reportTitle = 'Bookings Report';
        $reportLabel = 'SUM';
        $chartType   = 'line';

        $results = Booking::get()->sortBy('submitted')->groupBy(function ($entry) {
            if ($entry->submitted instanceof \Carbon\Carbon) {
                return \Carbon\Carbon::parse($entry->submitted)->format('Y-m-d');
            }

            return \Carbon\Carbon::createFromFormat(config('app.date_format'), $entry->submitted)->format('Y-m-d');
        })->map(function ($entries, $group) {
            return $entries->sum('id');
        });

        return view('admin.reports', compact('reportTitle', 'results', 'chartType', 'reportLabel'));
    }

}

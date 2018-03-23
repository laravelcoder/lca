<?php

namespace App\Http\Controllers\Api\V1;

use App\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreBookingsRequest;
use App\Http\Requests\Admin\UpdateBookingsRequest;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class BookingsController extends Controller
{
    public function index()
    {
        return Booking::all();
    }

    public function show($id)
    {
        return Booking::findOrFail($id);
    }

    public function update(UpdateBookingsRequest $request, $id)
    {
        $booking = Booking::findOrFail($id);
        $booking->update($request->all());
        

        return $booking;
    }

    public function store(StoreBookingsRequest $request)
    {
        $booking = Booking::create($request->all());
        

        return $booking;
    }

    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();
        return '';
    }
}

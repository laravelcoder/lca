<?php

namespace App\Http\Controllers\Admin;

use App\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreBookingsRequest;
use App\Http\Requests\Admin\UpdateBookingsRequest;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class BookingsController extends Controller
{
    /**
     * Display a listing of Booking.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('booking_access')) {
            return abort(401);
        }


        
        if (request()->ajax()) {
            $query = Booking::query();
            $query->with("requested_clinic");
            $query->with("clinic");
            $query->with("clinic_address");
            $query->with("clinic_phone");
            $template = 'actionsTemplate';
            if(request('show_deleted') == 1) {
                
        if (! Gate::allows('booking_delete')) {
            return abort(401);
        }
                $query->onlyTrashed();
                $template = 'restoreTemplate';
            }
            $query->select([
                'bookings.id',
                'bookings.submitted',
                'bookings.customername',
                'bookings.email',
                'bookings.phone',
                'bookings.family_number',
                'bookings.how_long',
                'bookings.requested_date',
                'bookings.requested_time',
                'bookings.requested_clinic_id',
                'bookings.clinic_id',
                'bookings.clinic_address_id',
                'bookings.clinic_phone_id',
                'bookings.clinic_text_numbers',
                'bookings.client_firstname',
            ]);
            $table = Datatables::of($query);

            $table->setRowAttr([
                'data-entry-id' => '{{$id}}',
            ]);
            $table->addColumn('massDelete', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');
            $table->editColumn('actions', function ($row) use ($template) {
                $gateKey  = 'booking_';
                $routeKey = 'admin.bookings';

                return view($template, compact('row', 'gateKey', 'routeKey'));
            });
            $table->editColumn('submitted', function ($row) {
                return $row->submitted ? $row->submitted : '';
            });
            $table->editColumn('phone', function ($row) {
                return $row->phone ? $row->phone : '';
            });
            $table->editColumn('family_number', function ($row) {
                return $row->family_number ? $row->family_number : '';
            });
            $table->editColumn('how_long', function ($row) {
                return $row->how_long ? $row->how_long : '';
            });
            $table->editColumn('requested_date', function ($row) {
                return $row->requested_date ? $row->requested_date : '';
            });
            $table->editColumn('requested_time', function ($row) {
                return $row->requested_time ? $row->requested_time : '';
            });
            $table->editColumn('requested_clinic.nickname', function ($row) {
                return $row->requested_clinic ? $row->requested_clinic->nickname : '';
            });
            $table->editColumn('clinic.clinic_id', function ($row) {
                return $row->clinic ? $row->clinic->clinic_id : '';
            });
            $table->editColumn('clinic_address.address', function ($row) {
                return $row->clinic_address ? $row->clinic_address->address : '';
            });
            $table->editColumn('clinic_phone.phone', function ($row) {
                return $row->clinic_phone ? $row->clinic_phone->phone : '';
            });
            $table->editColumn('clinic_text_numbers', function ($row) {
                return $row->clinic_text_numbers ? $row->clinic_text_numbers : '';
            });
            $table->editColumn('client_firstname', function ($row) {
                return $row->client_firstname ? $row->client_firstname : '';
            });

            $table->rawColumns(['actions','massDelete']);

            return $table->make(true);
        }

        return view('admin.bookings.index');
    }

    /**
     * Show the form for creating new Booking.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('booking_create')) {
            return abort(401);
        }
        
        $requested_clinics = \App\Location::get()->pluck('nickname', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $clinics = \App\Location::get()->pluck('clinic_id', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $clinic_addresses = \App\Location::get()->pluck('address', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $clinic_phones = \App\Location::get()->pluck('phone', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.bookings.create', compact('requested_clinics', 'clinics', 'clinic_addresses', 'clinic_phones'));
    }

    /**
     * Store a newly created Booking in storage.
     *
     * @param  \App\Http\Requests\StoreBookingsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookingsRequest $request)
    {
        if (! Gate::allows('booking_create')) {
            return abort(401);
        }
        $booking = Booking::create($request->all());



        return redirect()->route('admin.bookings.index');
    }


    /**
     * Show the form for editing Booking.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('booking_edit')) {
            return abort(401);
        }
        
        $requested_clinics = \App\Location::get()->pluck('nickname', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $clinics = \App\Location::get()->pluck('clinic_id', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $clinic_addresses = \App\Location::get()->pluck('address', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $clinic_phones = \App\Location::get()->pluck('phone', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $booking = Booking::findOrFail($id);

        return view('admin.bookings.edit', compact('booking', 'requested_clinics', 'clinics', 'clinic_addresses', 'clinic_phones'));
    }

    /**
     * Update Booking in storage.
     *
     * @param  \App\Http\Requests\UpdateBookingsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookingsRequest $request, $id)
    {
        if (! Gate::allows('booking_edit')) {
            return abort(401);
        }
        $booking = Booking::findOrFail($id);
        $booking->update($request->all());



        return redirect()->route('admin.bookings.index');
    }


    /**
     * Display Booking.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('booking_view')) {
            return abort(401);
        }
        $booking = Booking::findOrFail($id);

        return view('admin.bookings.show', compact('booking'));
    }


    /**
     * Remove Booking from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('booking_delete')) {
            return abort(401);
        }
        $booking = Booking::findOrFail($id);
        $booking->delete();

        return redirect()->route('admin.bookings.index');
    }

    /**
     * Delete all selected Booking at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('booking_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Booking::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Booking from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('booking_delete')) {
            return abort(401);
        }
        $booking = Booking::onlyTrashed()->findOrFail($id);
        $booking->restore();

        return redirect()->route('admin.bookings.index');
    }

    /**
     * Permanently delete Booking from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('booking_delete')) {
            return abort(401);
        }
        $booking = Booking::onlyTrashed()->findOrFail($id);
        $booking->forceDelete();

        return redirect()->route('admin.bookings.index');
    }
}

@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.booking.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.booking.fields.submitted')</th>
                            <td field-key='submitted'>{{ $booking->submitted }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.booking.fields.customername')</th>
                            <td field-key='customername'>{{ $booking->customername }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.booking.fields.email')</th>
                            <td field-key='email'>{{ $booking->email }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.booking.fields.phone')</th>
                            <td field-key='phone'>{{ $booking->phone }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.booking.fields.family-number')</th>
                            <td field-key='family_number'>{{ $booking->family_number }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.booking.fields.how-long')</th>
                            <td field-key='how_long'>{{ $booking->how_long }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.booking.fields.requested-date')</th>
                            <td field-key='requested_date'>{{ $booking->requested_date }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.booking.fields.requested-time')</th>
                            <td field-key='requested_time'>{{ $booking->requested_time }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.booking.fields.requested-clinic')</th>
                            <td field-key='requested_clinic'>{{ $booking->requested_clinic->nickname or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.locations.fields.city')</th>
                            <td field-key='city'>{{ isset($booking->requested_clinic) ? $booking->requested_clinic->city : '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.locations.fields.state')</th>
                            <td field-key='state'>{{ isset($booking->requested_clinic) ? $booking->requested_clinic->state : '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.locations.fields.clinic-id')</th>
                            <td field-key='clinic_id'>{{ isset($booking->requested_clinic) ? $booking->requested_clinic->clinic_id : '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.booking.fields.clinic')</th>
                            <td field-key='clinic'>{{ $booking->clinic->clinic_id or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.booking.fields.clinic-address')</th>
                            <td field-key='clinic_address'>{{ $booking->clinic_address->address or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.booking.fields.clinic-phone')</th>
                            <td field-key='clinic_phone'>{{ $booking->clinic_phone->phone or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.booking.fields.clinic-text-numbers')</th>
                            <td field-key='clinic_text_numbers'>{{ $booking->clinic_text_numbers }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.booking.fields.client-firstname')</th>
                            <td field-key='client_firstname'>{{ $booking->client_firstname }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.bookings.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop

@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.locations.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.locations.fields.nickname')</th>
                            <td field-key='nickname'>{{ $location->nickname }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.locations.fields.address')</th>
                            <td field-key='address'>{{ $location->address }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.locations.fields.address-2')</th>
                            <td field-key='address_2'>{{ $location->address_2 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.locations.fields.city')</th>
                            <td field-key='city'>{{ $location->city }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.locations.fields.state')</th>
                            <td field-key='state'>{{ $location->state }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.locations.fields.phone')</th>
                            <td field-key='phone'>{{ $location->phone }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.locations.fields.phone2')</th>
                            <td field-key='phone2'>{{ $location->phone2 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.locations.fields.logo')</th>
                            <td field-key='logo'>@if($location->logo)<a href="{{ asset(env('UPLOAD_PATH').'/' . $location->logo) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $location->logo) }}"/></a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.locations.fields.storefront')</th>
                            <td field-key='storefront'>@if($location->storefront)<a href="{{ asset(env('UPLOAD_PATH').'/' . $location->storefront) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $location->storefront) }}"/></a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.locations.fields.google-map-link')</th>
                            <td field-key='google_map_link'>{{ $location->google_map_link }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.locations.fields.clinic-id')</th>
                            <td field-key='clinic_id'>{{ $location->clinic_id }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.locations.fields.email')</th>
                            <td field-key='email'>{{ $location->email }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.locations.fields.created-by')</th>
                            <td field-key='created_by'>{{ $location->created_by->name or '' }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#zipcodes" aria-controls="zipcodes" role="tab" data-toggle="tab">Zipcodes</a></li>
<li role="presentation" class=""><a href="#website" aria-controls="website" role="tab" data-toggle="tab">Website</a></li>
<li role="presentation" class=""><a href="#booking" aria-controls="booking" role="tab" data-toggle="tab">Booking</a></li>
<li role="presentation" class=""><a href="#booking" aria-controls="booking" role="tab" data-toggle="tab">Booking</a></li>
<li role="presentation" class=""><a href="#booking" aria-controls="booking" role="tab" data-toggle="tab">Booking</a></li>
<li role="presentation" class=""><a href="#booking" aria-controls="booking" role="tab" data-toggle="tab">Booking</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="zipcodes">
<table class="table table-bordered table-striped {{ count($zipcodes) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.zipcodes.fields.zipcode')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($zipcodes) > 0)
            @foreach ($zipcodes as $zipcode)
                <tr data-entry-id="{{ $zipcode->id }}">
                    <td field-key='zipcode'>{{ $zipcode->zipcode }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['zipcodes.restore', $zipcode->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['zipcodes.perma_del', $zipcode->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('view')
                                    <a href="{{ route('zipcodes.show',[$zipcode->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('edit')
                                    <a href="{{ route('zipcodes.edit',[$zipcode->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['zipcodes.destroy', $zipcode->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="7">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="website">
<table class="table table-bordered table-striped {{ count($websites) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.website.fields.website')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($websites) > 0)
            @foreach ($websites as $website)
                <tr data-entry-id="{{ $website->id }}">
                    <td field-key='website'>{{ $website->website }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['websites.restore', $website->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['websites.perma_del', $website->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('view')
                                    <a href="{{ route('websites.show',[$website->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('edit')
                                    <a href="{{ route('websites.edit',[$website->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['websites.destroy', $website->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="7">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="booking">
<table class="table table-bordered table-striped {{ count($bookings) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.booking.fields.submitted')</th>
                        <th>@lang('quickadmin.booking.fields.customername')</th>
                        <th>@lang('quickadmin.booking.fields.email')</th>
                        <th>@lang('quickadmin.booking.fields.phone')</th>
                        <th>@lang('quickadmin.booking.fields.family-number')</th>
                        <th>@lang('quickadmin.booking.fields.requested-date')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($bookings) > 0)
            @foreach ($bookings as $booking)
                <tr data-entry-id="{{ $booking->id }}">
                    <td field-key='submitted'>{{ $booking->submitted }}</td>
                                <td field-key='customername'>{{ $booking->customername }}</td>
                                <td field-key='email'>{{ $booking->email }}</td>
                                <td field-key='phone'>{{ $booking->phone }}</td>
                                <td field-key='family_number'>{{ $booking->family_number }}</td>
                                <td field-key='requested_date'>{{ $booking->requested_date }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['bookings.restore', $booking->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['bookings.perma_del', $booking->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('view')
                                    <a href="{{ route('bookings.show',[$booking->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('edit')
                                    <a href="{{ route('bookings.edit',[$booking->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['bookings.destroy', $booking->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="19">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="booking">
<table class="table table-bordered table-striped {{ count($bookings) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.booking.fields.submitted')</th>
                        <th>@lang('quickadmin.booking.fields.customername')</th>
                        <th>@lang('quickadmin.booking.fields.email')</th>
                        <th>@lang('quickadmin.booking.fields.phone')</th>
                        <th>@lang('quickadmin.booking.fields.family-number')</th>
                        <th>@lang('quickadmin.booking.fields.requested-date')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($bookings) > 0)
            @foreach ($bookings as $booking)
                <tr data-entry-id="{{ $booking->id }}">
                    <td field-key='submitted'>{{ $booking->submitted }}</td>
                                <td field-key='customername'>{{ $booking->customername }}</td>
                                <td field-key='email'>{{ $booking->email }}</td>
                                <td field-key='phone'>{{ $booking->phone }}</td>
                                <td field-key='family_number'>{{ $booking->family_number }}</td>
                                <td field-key='requested_date'>{{ $booking->requested_date }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['bookings.restore', $booking->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['bookings.perma_del', $booking->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('view')
                                    <a href="{{ route('bookings.show',[$booking->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('edit')
                                    <a href="{{ route('bookings.edit',[$booking->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['bookings.destroy', $booking->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="19">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="booking">
<table class="table table-bordered table-striped {{ count($bookings) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.booking.fields.submitted')</th>
                        <th>@lang('quickadmin.booking.fields.customername')</th>
                        <th>@lang('quickadmin.booking.fields.email')</th>
                        <th>@lang('quickadmin.booking.fields.phone')</th>
                        <th>@lang('quickadmin.booking.fields.family-number')</th>
                        <th>@lang('quickadmin.booking.fields.requested-date')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($bookings) > 0)
            @foreach ($bookings as $booking)
                <tr data-entry-id="{{ $booking->id }}">
                    <td field-key='submitted'>{{ $booking->submitted }}</td>
                                <td field-key='customername'>{{ $booking->customername }}</td>
                                <td field-key='email'>{{ $booking->email }}</td>
                                <td field-key='phone'>{{ $booking->phone }}</td>
                                <td field-key='family_number'>{{ $booking->family_number }}</td>
                                <td field-key='requested_date'>{{ $booking->requested_date }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['bookings.restore', $booking->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['bookings.perma_del', $booking->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('view')
                                    <a href="{{ route('bookings.show',[$booking->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('edit')
                                    <a href="{{ route('bookings.edit',[$booking->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['bookings.destroy', $booking->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="19">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="booking">
<table class="table table-bordered table-striped {{ count($bookings) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.booking.fields.submitted')</th>
                        <th>@lang('quickadmin.booking.fields.customername')</th>
                        <th>@lang('quickadmin.booking.fields.email')</th>
                        <th>@lang('quickadmin.booking.fields.phone')</th>
                        <th>@lang('quickadmin.booking.fields.family-number')</th>
                        <th>@lang('quickadmin.booking.fields.requested-date')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($bookings) > 0)
            @foreach ($bookings as $booking)
                <tr data-entry-id="{{ $booking->id }}">
                    <td field-key='submitted'>{{ $booking->submitted }}</td>
                                <td field-key='customername'>{{ $booking->customername }}</td>
                                <td field-key='email'>{{ $booking->email }}</td>
                                <td field-key='phone'>{{ $booking->phone }}</td>
                                <td field-key='family_number'>{{ $booking->family_number }}</td>
                                <td field-key='requested_date'>{{ $booking->requested_date }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['bookings.restore', $booking->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['bookings.perma_del', $booking->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('view')
                                    <a href="{{ route('bookings.show',[$booking->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('edit')
                                    <a href="{{ route('bookings.edit',[$booking->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['bookings.destroy', $booking->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="19">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.locations.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop

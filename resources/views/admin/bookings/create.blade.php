@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.booking.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.bookings.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('submitted', trans('quickadmin.booking.fields.submitted').'', ['class' => 'control-label']) !!}
                    {!! Form::text('submitted', old('submitted'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('submitted'))
                        <p class="help-block">
                            {{ $errors->first('submitted') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('customername', trans('quickadmin.booking.fields.customername').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('customername', old('customername'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('customername'))
                        <p class="help-block">
                            {{ $errors->first('customername') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('email', trans('quickadmin.booking.fields.email').'*', ['class' => 'control-label']) !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('email'))
                        <p class="help-block">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('phone', trans('quickadmin.booking.fields.phone').'', ['class' => 'control-label']) !!}
                    {!! Form::text('phone', old('phone'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('phone'))
                        <p class="help-block">
                            {{ $errors->first('phone') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('family_number', trans('quickadmin.booking.fields.family-number').'', ['class' => 'control-label']) !!}
                    {!! Form::text('family_number', old('family_number'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('family_number'))
                        <p class="help-block">
                            {{ $errors->first('family_number') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('how_long', trans('quickadmin.booking.fields.how-long').'', ['class' => 'control-label']) !!}
                    {!! Form::text('how_long', old('how_long'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('how_long'))
                        <p class="help-block">
                            {{ $errors->first('how_long') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('requested_date', trans('quickadmin.booking.fields.requested-date').'', ['class' => 'control-label']) !!}
                    {!! Form::text('requested_date', old('requested_date'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('requested_date'))
                        <p class="help-block">
                            {{ $errors->first('requested_date') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('requested_time', trans('quickadmin.booking.fields.requested-time').'', ['class' => 'control-label']) !!}
                    {!! Form::text('requested_time', old('requested_time'), ['class' => 'form-control timepicker', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('requested_time'))
                        <p class="help-block">
                            {{ $errors->first('requested_time') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('requested_clinic_id', trans('quickadmin.booking.fields.requested-clinic').'', ['class' => 'control-label']) !!}
                    {!! Form::select('requested_clinic_id', $requested_clinics, old('requested_clinic_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('requested_clinic_id'))
                        <p class="help-block">
                            {{ $errors->first('requested_clinic_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('clinic_id', trans('quickadmin.booking.fields.clinic').'', ['class' => 'control-label']) !!}
                    {!! Form::select('clinic_id', $clinics, old('clinic_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('clinic_id'))
                        <p class="help-block">
                            {{ $errors->first('clinic_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('clinic_address_id', trans('quickadmin.booking.fields.clinic-address').'', ['class' => 'control-label']) !!}
                    {!! Form::select('clinic_address_id', $clinic_addresses, old('clinic_address_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('clinic_address_id'))
                        <p class="help-block">
                            {{ $errors->first('clinic_address_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('clinic_phone_id', trans('quickadmin.booking.fields.clinic-phone').'', ['class' => 'control-label']) !!}
                    {!! Form::select('clinic_phone_id', $clinic_phones, old('clinic_phone_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('clinic_phone_id'))
                        <p class="help-block">
                            {{ $errors->first('clinic_phone_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('clinic_text_numbers', trans('quickadmin.booking.fields.clinic-text-numbers').'', ['class' => 'control-label']) !!}
                    {!! Form::text('clinic_text_numbers', old('clinic_text_numbers'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('clinic_text_numbers'))
                        <p class="help-block">
                            {{ $errors->first('clinic_text_numbers') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('client_firstname', trans('quickadmin.booking.fields.client-firstname').'', ['class' => 'control-label']) !!}
                    {!! Form::text('client_firstname', old('client_firstname'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('client_firstname'))
                        <p class="help-block">
                            {{ $errors->first('client_firstname') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
    @parent
    <script>
        $('.date').datepicker({
            autoclose: true,
            dateFormat: "{{ config('app.date_format_js') }}"
        });
    </script>
    <script src="{{ url('quickadmin/js') }}/timepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>    <script>
        $('.timepicker').datetimepicker({
            autoclose: true,
            timeFormat: "HH:mm:ss",
            timeOnly: true
        });
    </script>

@stop
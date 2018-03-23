@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.contacts.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.contacts.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('first_name', trans('quickadmin.contacts.fields.first-name').'', ['class' => 'control-label']) !!}
                    {!! Form::text('first_name', old('first_name'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('first_name'))
                        <p class="help-block">
                            {{ $errors->first('first_name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('last_name', trans('quickadmin.contacts.fields.last-name').'', ['class' => 'control-label']) !!}
                    {!! Form::text('last_name', old('last_name'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('last_name'))
                        <p class="help-block">
                            {{ $errors->first('last_name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('phone1', trans('quickadmin.contacts.fields.phone1').'', ['class' => 'control-label']) !!}
                    {!! Form::text('phone1', old('phone1'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('phone1'))
                        <p class="help-block">
                            {{ $errors->first('phone1') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('phone2', trans('quickadmin.contacts.fields.phone2').'', ['class' => 'control-label']) !!}
                    {!! Form::text('phone2', old('phone2'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('phone2'))
                        <p class="help-block">
                            {{ $errors->first('phone2') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('email', trans('quickadmin.contacts.fields.email').'', ['class' => 'control-label']) !!}
                    {!! Form::text('email', old('email'), ['class' => 'form-control', 'placeholder' => '']) !!}
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
                    {!! Form::label('company_id', trans('quickadmin.contacts.fields.company').'', ['class' => 'control-label']) !!}
                    {!! Form::select('company_id', $companies, old('company_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('company_id'))
                        <p class="help-block">
                            {{ $errors->first('company_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('skype', trans('quickadmin.contacts.fields.skype').'', ['class' => 'control-label']) !!}
                    {!! Form::text('skype', old('skype'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('skype'))
                        <p class="help-block">
                            {{ $errors->first('skype') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('twitter_username', trans('quickadmin.contacts.fields.twitter-username').'', ['class' => 'control-label']) !!}
                    {!! Form::text('twitter_username', old('twitter_username'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('twitter_username'))
                        <p class="help-block">
                            {{ $errors->first('twitter_username') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('instagram_username', trans('quickadmin.contacts.fields.instagram-username').'', ['class' => 'control-label']) !!}
                    {!! Form::text('instagram_username', old('instagram_username'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('instagram_username'))
                        <p class="help-block">
                            {{ $errors->first('instagram_username') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('facebook_url', trans('quickadmin.contacts.fields.facebook-url').'', ['class' => 'control-label']) !!}
                    {!! Form::text('facebook_url', old('facebook_url'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('facebook_url'))
                        <p class="help-block">
                            {{ $errors->first('facebook_url') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('linked_in_url', trans('quickadmin.contacts.fields.linked-in-url').'', ['class' => 'control-label']) !!}
                    {!! Form::text('linked_in_url', old('linked_in_url'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('linked_in_url'))
                        <p class="help-block">
                            {{ $errors->first('linked_in_url') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('google_plus_url', trans('quickadmin.contacts.fields.google-plus-url').'', ['class' => 'control-label']) !!}
                    {!! Form::text('google_plus_url', old('google_plus_url'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('google_plus_url'))
                        <p class="help-block">
                            {{ $errors->first('google_plus_url') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('personal_website', trans('quickadmin.contacts.fields.personal-website').'', ['class' => 'control-label']) !!}
                    {!! Form::text('personal_website', old('personal_website'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('personal_website'))
                        <p class="help-block">
                            {{ $errors->first('personal_website') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('contact_type', trans('quickadmin.contacts.fields.contact-type').'*', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('contact_type'))
                        <p class="help-block">
                            {{ $errors->first('contact_type') }}
                        </p>
                    @endif
                    <div>
                        <label>
                            {!! Form::radio('contact_type', 'ge', false, ['required' => '']) !!}
                            General Employee
                        </label>
                    </div>
                    <div>
                        <label>
                            {!! Form::radio('contact_type', 'cp', false, ['required' => '']) !!}
                            Contact Person
                        </label>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop


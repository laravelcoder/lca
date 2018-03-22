@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.contact-companies.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.contact_companies.store'], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', trans('quickadmin.contact-companies.fields.name').'', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('logo', trans('quickadmin.contact-companies.fields.logo').'', ['class' => 'control-label']) !!}
                    {!! Form::file('logo', ['class' => 'form-control', 'style' => 'margin-top: 4px;']) !!}
                    {!! Form::hidden('logo_max_size', 2) !!}
                    {!! Form::hidden('logo_max_width', 1800) !!}
                    {!! Form::hidden('logo_max_height', 1800) !!}
                    <p class="help-block"></p>
                    @if($errors->has('logo'))
                        <p class="help-block">
                            {{ $errors->first('logo') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('storefront', trans('quickadmin.contact-companies.fields.storefront').'', ['class' => 'control-label']) !!}
                    {!! Form::file('storefront', ['class' => 'form-control', 'style' => 'margin-top: 4px;']) !!}
                    {!! Form::hidden('storefront_max_size', 4) !!}
                    {!! Form::hidden('storefront_max_width', 1800) !!}
                    {!! Form::hidden('storefront_max_height', 1800) !!}
                    <p class="help-block">Image of your storefront</p>
                    @if($errors->has('storefront'))
                        <p class="help-block">
                            {{ $errors->first('storefront') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            Locations
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>@lang('quickadmin.locations.fields.nickname')</th>
                        <th>@lang('quickadmin.locations.fields.address')</th>
                        <th>@lang('quickadmin.locations.fields.address-2')</th>
                        <th>@lang('quickadmin.locations.fields.city')</th>
                        <th>@lang('quickadmin.locations.fields.state')</th>
                        <th>@lang('quickadmin.locations.fields.phone')</th>
                        
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody id="locations">
                    @foreach(old('locations', []) as $index => $data)
                        @include('admin.contact_companies.locations_row', [
                            'index' => $index
                        ])
                    @endforeach
                </tbody>
            </table>
            <a href="#" class="btn btn-success pull-right add-new">@lang('quickadmin.qa_add_new')</a>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            Contacts
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>@lang('quickadmin.contacts.fields.first-name')</th>
                        <th>@lang('quickadmin.contacts.fields.last-name')</th>
                        <th>@lang('quickadmin.contacts.fields.phone1')</th>
                        <th>@lang('quickadmin.contacts.fields.phone2')</th>
                        <th>@lang('quickadmin.contacts.fields.email')</th>
                        <th>@lang('quickadmin.contacts.fields.skype')</th>
                        <th>@lang('quickadmin.contacts.fields.twitter-username')</th>
                        <th>@lang('quickadmin.contacts.fields.instagram-username')</th>
                        <th>@lang('quickadmin.contacts.fields.facebook-url')</th>
                        <th>@lang('quickadmin.contacts.fields.linked-in-url')</th>
                        <th>@lang('quickadmin.contacts.fields.google-plus-url')</th>
                        <th>@lang('quickadmin.contacts.fields.personal-website')</th>
                        
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody id="contacts">
                    @foreach(old('contacts', []) as $index => $data)
                        @include('admin.contact_companies.contacts_row', [
                            'index' => $index
                        ])
                    @endforeach
                </tbody>
            </table>
            <a href="#" class="btn btn-success pull-right add-new">@lang('quickadmin.qa_add_new')</a>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            Assets
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>@lang('quickadmin.assets.fields.serial-number')</th>
                        <th>@lang('quickadmin.assets.fields.title')</th>
                        
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody id="assets">
                    @foreach(old('assets', []) as $index => $data)
                        @include('admin.contact_companies.assets_row', [
                            'index' => $index
                        ])
                    @endforeach
                </tbody>
            </table>
            <a href="#" class="btn btn-success pull-right add-new">@lang('quickadmin.qa_add_new')</a>
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
    @parent

    <script type="text/html" id="locations-template">
        @include('admin.contact_companies.locations_row',
                [
                    'index' => '_INDEX_',
                ])
               </script > 

    <script type="text/html" id="contacts-template">
        @include('admin.contact_companies.contacts_row',
                [
                    'index' => '_INDEX_',
                ])
               </script > 

    <script type="text/html" id="assets-template">
        @include('admin.contact_companies.assets_row',
                [
                    'index' => '_INDEX_',
                ])
               </script > 

            <script>
        $('.add-new').click(function () {
            var tableBody = $(this).parent().find('tbody');
            var template = $('#' + tableBody.attr('id') + '-template').html();
            var lastIndex = parseInt(tableBody.find('tr').last().data('index'));
            if (isNaN(lastIndex)) {
                lastIndex = 0;
            }
            tableBody.append(template.replace(/_INDEX_/g, lastIndex + 1));
            return false;
        });
        $(document).on('click', '.remove', function () {
            var row = $(this).parentsUntil('tr').parent();
            row.remove();
            return false;
        });
        </script>
@stop
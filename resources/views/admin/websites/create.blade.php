@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.website.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.websites.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('website', trans('quickadmin.website.fields.website').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('website', old('website'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('website'))
                        <p class="help-block">
                            {{ $errors->first('website') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('location_id', trans('quickadmin.website.fields.location').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('location_id', $locations, old('location_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('location_id'))
                        <p class="help-block">
                            {{ $errors->first('location_id') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            Adwords
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>@lang('quickadmin.adwords.fields.client-customer-id')</th>
                        <th>@lang('quickadmin.adwords.fields.user-agent')</th>
                        <th>@lang('quickadmin.adwords.fields.client-id')</th>
                        <th>@lang('quickadmin.adwords.fields.client-secret')</th>
                        <th>@lang('quickadmin.adwords.fields.refresh-token')</th>
                        <th>@lang('quickadmin.adwords.fields.authorization-uri')</th>
                        <th>@lang('quickadmin.adwords.fields.redirect-uri')</th>
                        <th>@lang('quickadmin.adwords.fields.token-credential-uri')</th>
                        <th>@lang('quickadmin.adwords.fields.scope')</th>
                        
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody id="adwords">
                    @foreach(old('adwords', []) as $index => $data)
                        @include('admin.websites.adwords_row', [
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
            Analytics
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>@lang('quickadmin.analytics.fields.view-name')</th>
                        <th>@lang('quickadmin.analytics.fields.view-id')</th>
                        
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody id="analytics">
                    @foreach(old('analytics', []) as $index => $data)
                        @include('admin.websites.analytics_row', [
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

    <script type="text/html" id="adwords-template">
        @include('admin.websites.adwords_row',
                [
                    'index' => '_INDEX_',
                ])
               </script > 

    <script type="text/html" id="analytics-template">
        @include('admin.websites.analytics_row',
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
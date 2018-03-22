@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.analytics.title')</h3>
    
    {!! Form::model($analytic, ['method' => 'PUT', 'route' => ['admin.analytics.update', $analytic->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('view_name', trans('quickadmin.analytics.fields.view-name').'', ['class' => 'control-label']) !!}
                    {!! Form::text('view_name', old('view_name'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('view_name'))
                        <p class="help-block">
                            {{ $errors->first('view_name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('website_id', trans('quickadmin.analytics.fields.website').'', ['class' => 'control-label']) !!}
                    {!! Form::select('website_id', $websites, old('website_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('website_id'))
                        <p class="help-block">
                            {{ $errors->first('website_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('view_id', trans('quickadmin.analytics.fields.view-id').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('view_id', old('view_id'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('view_id'))
                        <p class="help-block">
                            {{ $errors->first('view_id') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop


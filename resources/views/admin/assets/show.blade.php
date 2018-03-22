@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.assets.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.assets.fields.category')</th>
                            <td field-key='category'>{{ $asset->category->title or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.assets.fields.serial-number')</th>
                            <td field-key='serial_number'>{{ $asset->serial_number }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.assets.fields.title')</th>
                            <td field-key='title'>{{ $asset->title }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.assets.fields.photo1')</th>
                            <td field-key='photo1'>@if($asset->photo1)<a href="{{ asset(env('UPLOAD_PATH').'/' . $asset->photo1) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $asset->photo1) }}"/></a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.assets.fields.photo2')</th>
                            <td field-key='photo2'>@if($asset->photo2)<a href="{{ asset(env('UPLOAD_PATH').'/' . $asset->photo2) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $asset->photo2) }}"/></a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.assets.fields.photo3')</th>
                            <td field-key='photo3'>@if($asset->photo3)<a href="{{ asset(env('UPLOAD_PATH').'/' . $asset->photo3) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $asset->photo3) }}"/></a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.assets.fields.status')</th>
                            <td field-key='status'>{{ $asset->status->title or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.assets.fields.location')</th>
                            <td field-key='location'>{{ $asset->location->title or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.assets.fields.assigned-user')</th>
                            <td field-key='assigned_user'>{{ $asset->assigned_user->name or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.assets.fields.notes')</th>
                            <td field-key='notes'>{!! $asset->notes !!}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#assetshistory" aria-controls="assetshistory" role="tab" data-toggle="tab">Assets history</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="assetshistory">
<table class="table table-bordered table-striped {{ count($assets_histories) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.assets-history.created_at')</th>
                        <th>@lang('quickadmin.assets-history.fields.asset')</th>
                        <th>@lang('quickadmin.assets-history.fields.status')</th>
                        <th>@lang('quickadmin.assets-history.fields.location')</th>
                        <th>@lang('quickadmin.assets-history.fields.assigned-user')</th>
                        
        </tr>
    </thead>

    <tbody>
        @if (count($assets_histories) > 0)
            @foreach ($assets_histories as $assets_history)
                <tr data-entry-id="{{ $assets_history->id }}">
                    <td>{{ $assets_history->created_at or '' }}</td>
                                <td field-key='asset'>{{ $assets_history->asset->title or '' }}</td>
                                <td field-key='status'>{{ $assets_history->status->title or '' }}</td>
                                <td field-key='location'>{{ $assets_history->location->title or '' }}</td>
                                <td field-key='assigned_user'>{{ $assets_history->assigned_user->name or '' }}</td>
                                
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
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.assets.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop

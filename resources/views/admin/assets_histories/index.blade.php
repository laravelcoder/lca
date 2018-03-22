@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.assets-history.title')</h3>
    @can('assets_history_create')
    <p>
        
        
    </p>
    @endcan

    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($assets_histories) > 0 ? 'datatable' : '' }} ">
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
@stop

@section('javascript') 
    <script>
        
    </script>
@endsection
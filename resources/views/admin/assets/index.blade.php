@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.assets.title')</h3>
    @can('asset_create')
    <p>
        <a href="{{ route('admin.assets.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped ajaxTable @can('asset_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('asset_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('quickadmin.assets.fields.category')</th>
                        <th>@lang('quickadmin.assets.fields.serial-number')</th>
                        <th>@lang('quickadmin.assets.fields.title')</th>
                        <th>@lang('quickadmin.assets.fields.photo1')</th>
                        <th>@lang('quickadmin.assets.fields.photo2')</th>
                        <th>@lang('quickadmin.assets.fields.photo3')</th>
                        <th>@lang('quickadmin.assets.fields.status')</th>
                        <th>@lang('quickadmin.assets.fields.location')</th>
                        <th>@lang('quickadmin.assets.fields.assigned-user')</th>
                        <th>@lang('quickadmin.assets.fields.notes')</th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('asset_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.assets.mass_destroy') }}';
        @endcan
        $(document).ready(function () {
            window.dtDefaultOptions.ajax = '{!! route('admin.assets.index') !!}';
            window.dtDefaultOptions.columns = [@can('asset_delete')
                    {data: 'massDelete', name: 'id', searchable: false, sortable: false},
                @endcan{data: 'category.title', name: 'category.title'},
                {data: 'serial_number', name: 'serial_number'},
                {data: 'title', name: 'title'},
                {data: 'photo1', name: 'photo1'},
                {data: 'photo2', name: 'photo2'},
                {data: 'photo3', name: 'photo3'},
                {data: 'status.title', name: 'status.title'},
                {data: 'location.title', name: 'location.title'},
                {data: 'assigned_user.name', name: 'assigned_user.name'},
                {data: 'notes', name: 'notes'},
                
                {data: 'actions', name: 'actions', searchable: false, sortable: false}
            ];
            processAjaxTables();
        });
    </script>
@endsection
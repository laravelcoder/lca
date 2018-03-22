@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.assets-categories.title')</h3>
    @can('assets_category_create')
    <p>
        <a href="{{ route('admin.assets_categories.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($assets_categories) > 0 ? 'datatable' : '' }} @can('assets_category_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('assets_category_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('quickadmin.assets-categories.fields.title')</th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($assets_categories) > 0)
                        @foreach ($assets_categories as $assets_category)
                            <tr data-entry-id="{{ $assets_category->id }}">
                                @can('assets_category_delete')
                                    <td></td>
                                @endcan

                                <td field-key='title'>{{ $assets_category->title }}</td>
                                                                <td>
                                    @can('assets_category_view')
                                    <a href="{{ route('admin.assets_categories.show',[$assets_category->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('assets_category_edit')
                                    <a href="{{ route('admin.assets_categories.edit',[$assets_category->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('assets_category_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.assets_categories.destroy', $assets_category->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('assets_category_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.assets_categories.mass_destroy') }}';
        @endcan

    </script>
@endsection
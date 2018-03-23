@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.contact-companies.title')</h3>
    @can('contact_company_create')
    <p>
        <a href="{{ route('admin.contact_companies.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($contact_companies) > 0 ? 'datatable' : '' }} @can('contact_company_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('contact_company_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('quickadmin.contact-companies.fields.name')</th>
                        <th>@lang('quickadmin.contact-companies.fields.logo')</th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($contact_companies) > 0)
                        @foreach ($contact_companies as $contact_company)
                            <tr data-entry-id="{{ $contact_company->id }}">
                                @can('contact_company_delete')
                                    <td></td>
                                @endcan

                                <td field-key='name'>{{ $contact_company->name }}</td>
                                <td field-key='logo'>@if($contact_company->logo)<a href="{{ asset(env('UPLOAD_PATH').'/' . $contact_company->logo) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $contact_company->logo) }}"/></a>@endif</td>
                                                                <td>
                                    @can('contact_company_view')
                                    <a href="{{ route('admin.contact_companies.show',[$contact_company->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('contact_company_edit')
                                    <a href="{{ route('admin.contact_companies.edit',[$contact_company->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('contact_company_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.contact_companies.destroy', $contact_company->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

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
        @can('contact_company_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.contact_companies.mass_destroy') }}';
        @endcan

    </script>
@endsection
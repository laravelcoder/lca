@extends('layouts.app')

@section('content')
    <div class="row">
         <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Recently added locations</div>

                <div class="panel-body table-responsive">
                    <table class="table table-bordered table-striped ajaxTable">
                        <thead>
                        <tr>
                            
                            <th> @lang('quickadmin.locations.fields.nickname')</th> 
                            <th> @lang('quickadmin.locations.fields.address')</th> 
                            <th> @lang('quickadmin.locations.fields.address-2')</th> 
                            <th> @lang('quickadmin.locations.fields.city')</th> 
                            <th> @lang('quickadmin.locations.fields.state')</th> 
                            <th>&nbsp;</th>
                        </tr>
                        </thead>
                        @foreach($locations as $location)
                            <tr>
                               
                                <td>{{ $location->nickname }} </td> 
                                <td>{{ $location->address }} </td> 
                                <td>{{ $location->address_2 }} </td> 
                                <td>{{ $location->city }} </td> 
                                <td>{{ $location->state }} </td> 
                                <td>

                                    @can('location_view')
                                    <a href="{{ route('admin.locations.show',[$location->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan

                                    @can('location_edit')
                                    <a href="{{ route('admin.locations.edit',[$location->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan

                                    @can('location_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.locations.destroy', $location->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                
</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
 </div>


    </div>
@endsection


<div class="row">
    <div class="col-md-12"><button class="btn btn-primary add_location">Add Location</button></div></div>
<br/>
<div class="row" id="location_form" style="display:none;">
    {!! Form::open(['route' => 'admin.locations.store']) !!}
    {!! Form::hidden('user_id', $user->id) !!}
    @include('backend.user.partials.locations-fields')
    {!! Form::close() !!}
</div>
@if(@$user->locations->count() > 0)
<table class="table table-responsive" id="locations-table">
    <thead>
    <th>Nickname</th>
    <th>Address</th>
    <th>Street</th>
    <th>City</th>
    <th>State</th>
    <th>Zip</th>
    <th>Country</th>
    <th colspan="3">Action</th>
</thead>
<tbody>
    @foreach($user->locations as $location)
    <tr>
        <td>{!! $location->nickname !!}</td>
        <td>{!! $location->address !!}</td>
        <td>{!! $location->street.($location->street_additional ? ', '.$location->street_additional : '') !!}</td>
        <td>{!! $location->city !!}</td>
        <td>{!! $location->state !!}</td>
        <td>{!! $location->zipcode !!}</td>
        <td>{!! $location->country !!}</td>
        <td>
            {!! Form::open(['route' => ['admin.locations.destroy', $location->id], 'method' => 'delete']) !!}
            <div class='btn-group'>
                <a href="{!! route('admin.locations.show', [$location->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                <a href="{!! route('admin.locations.edit', [$location->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
            </div>
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
</tbody>
</table>
@else
<div class="alert alert-info">
    No locations found.
</div>
@endif
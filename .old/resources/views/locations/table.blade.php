<table class="table table-responsive" id="locations-table">
    <thead>
        <tr>
            <th>Address</th>
        <th>Address2</th>
        <th>City</th>
        <th>State</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Website</th>
        <th>Country</th>
        <th>Nickname</th>
        <th>Date Opened</th>
        <th>Quickbase Id</th>
        <th>Clinic Id</th>
        <th>Zipcodes Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($locations as $location)
        <tr>
            <td>{!! $location->address !!}</td>
            <td>{!! $location->address2 !!}</td>
            <td>{!! $location->city !!}</td>
            <td>{!! $location->state !!}</td>
            <td>{!! $location->phone !!}</td>
            <td>{!! $location->email !!}</td>
            <td>{!! $location->website !!}</td>
            <td>{!! $location->country !!}</td>
            <td>{!! $location->nickname !!}</td>
            <td>{!! $location->date_opened !!}</td>
            <td>{!! $location->quickbase_id !!}</td>
            <td>{!! $location->clinic_id !!}</td>
            <td>{!! $location->zipcodes_id !!}</td>
            <td>
                {!! Form::open(['route' => ['locations.destroy', $location->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('locations.show', [$location->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('locations.edit', [$location->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
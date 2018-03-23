<table class="table table-responsive" id="zipcodes-table">
    <thead>
        <tr>
            <th>Zip</th>
        <th>Location Id</th>
        <th>Clinic Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($zipcodes as $zipcode)
        <tr>
            <td>{!! $zipcode->zip !!}</td>
            <td>{!! $zipcode->location_id !!}</td>
            <td>{!! $zipcode->clinic_id !!}</td>
            <td>
                {!! Form::open(['route' => ['zipcodes.destroy', $zipcode->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('zipcodes.show', [$zipcode->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('zipcodes.edit', [$zipcode->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<table class="table table-responsive" id="websites-table">
    <thead>
        <tr>
            <th>Id</th>
        <th>Website Name</th>
        <th>Website</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($websites as $website)
        <tr>
            <td>{!! $website->id !!}</td>
            <td>{!! $website->website_name !!}</td>
            <td>{!! $website->website !!}</td>
            <td>
                {!! Form::open(['route' => ['websites.destroy', $website], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('websites.show', [$website]) !!}" class='btn btn-success btn-xs'><i class="fa fa-eye fa-2x"></i></a>
                    <a href="{!! route('websites.edit', [$website]) !!}" class='btn btn-warning btn-xs'><i class="fa fa-pencil-square-o fa-2x"></i></a>
                    {!! Form::button('<i class="fa fa-trash fa-2x"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>



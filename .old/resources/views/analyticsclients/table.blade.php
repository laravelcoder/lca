<table class="table table-responsive" id="analyticsclients-table">
    <thead>
        <tr>
            <th>Id</th>
        <th>View Id</th>
        <th>View Url</th>
        <th>User Id</th>
        <th>Clinic Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($analyticsclients as $analyticsclient)
        <tr>
            <td>{!! $analyticsclient->id !!}</td>
            <td>{!! $analyticsclient->view_id !!}</td>
            <td>{!! $analyticsclient->view_url !!}</td>
            <td>{!! $analyticsclient->user_id !!}</td>
            <td>{!! $analyticsclient->clinic_id !!}</td>
            <td>
                {!! Form::open(['route' => ['analyticsclients.destroy', $analyticsclient->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('analyticsclients.show', [$analyticsclient->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('analyticsclients.edit', [$analyticsclient->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
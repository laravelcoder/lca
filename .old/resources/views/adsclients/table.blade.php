<table class="table table-responsive" id="adsclients-table">
    <thead>
        <tr>
            <th>Id</th>
        <th>User Agent</th>
        <th>User Id</th>
        <th>Clinic Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($adsclients as $adsclient)
        <tr>
            <td>{!! $adsclient->id !!}</td>
            <td>{!! $adsclient->user_agent !!}</td>
            <td>{!! $adsclient->user_id !!}</td>
            <td>{!! $adsclient->clinic_id !!}</td>
            <td>
                {!! Form::open(['route' => ['adsclients.destroy', $adsclient->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('adsclients.show', [$adsclient->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('adsclients.edit', [$adsclient->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
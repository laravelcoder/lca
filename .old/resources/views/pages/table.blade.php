<table class="table table-responsive" id="pages-table">
    <thead>
        <tr>
            <th>Title</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($pages as $page)
        <tr>
            <td>{!! $page->title !!}</td>
            <td>
                {!! Form::open(['route' => ['pages.destroy', $page], 'method' => 'delete']) !!}
                <div class='btn-group'>
                	<a href="{!! route('pages.show', [$page]) !!}" class='btn btn-success btn-xs' target="_blank"><i class="fa fa-eye fa-2x"></i></a>
					<a href="{!! route('pages.edit', [$page]) !!}" class='btn btn-warning btn-xs'><i class="fa fa-pencil-square-o fa-2x"></i></a>
					{!! Form::button('<i class="fa fa-trash fa-2x"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
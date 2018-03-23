<table class="table table-responsive" id="users-table">
	<thead>
	<tr>
		<th>Name</th>
		<th>Username</th>
		<th>Email</th>
		<th>Phone</th>
		<th>User Visits</th>
		<th>Admin</th>
		<th> </th>
		<th colspan="3">Action</th>
	</tr>
	</thead>
	<tbody>
	@foreach($users as $user)
		<tr>
			<td>{!! $user->name !!} </td>
			<td>{!! $user->username !!}</td>
			<td>{!! $user->email !!}</td>
			<td>{!! @$user->profiles->phone !!}</td>
			<td>{!! $user->user_visits !!}</td>
			<td>{!! ($user->admin) ? '<i class="fa fa-check-circle-o fa-2x text-success" style="color:green"></i>' : '<i class="fa fa-times-circle fa-2x text-danger" style="color:red"></i>'  !!}</td>
			<td> </td>
			<td>
				{!! Form::open(['route' => ['users.destroy', $user], 'method' => 'delete']) !!}
				<div class='btn-group'>
					<a href="{!! route('users.show', [$user]) !!}" class='btn btn-success btn-xs'><i class="fa fa-eye fa-2x"></i></a>
					<a href="{!! route('users.edit', [$user]) !!}" class='btn btn-warning btn-xs'><i class="fa fa-pencil-square-o fa-2x"></i></a>
					{!! Form::button('<i class="fa fa-trash fa-2x"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
				</div>
				{!! Form::close() !!}
			</td>
		</tr>
	@endforeach
	</tbody>
</table>


<script>
	const users = $.ajax({
			url: '/us',
			dataType: 'json',
			async: false
		}).responseText;

		const data = new google.visualization.DataTable(users);
</script>
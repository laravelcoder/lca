<table class="table table-responsive" id="profiles-table">
    <thead>
        <tr>
            <th>Photo</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Uuid</th>
        <th>About Me</th>
        <th>Website Id</th>
        <th>Company</th>
        <th>Gender</th>
        <th>Phone</th>
        <th>Mobile</th>
        <th>Work</th>
        <th>Other</th>
        <th>Is Published</th>
        <th>Is Active</th>
        <th>Dob</th>
        <th>Skypeid</th>
        <th>Githubid</th>
        <th>Twitter Username</th>
        <th>Instagram Username</th>
        <th>Facebook Username</th>
        <th>Facebook Url</th>
        <th>Linked In Url</th>
        <th>Google Plus Url</th>
        <th>Slug</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($profiles as $profile)
        <tr>
            <td>{!! $profile->photo !!}</td>
            <td>{!! $profile->first_name !!}</td>
            <td>{!! $profile->last_name !!}</td>
            <td>{!! $profile->uuid !!}</td>
            <td>{!! $profile->about_me !!}</td>
            <td>{!! $profile->website_id !!}</td>
            <td>{!! $profile->company !!}</td>
            <td>{!! $profile->gender !!}</td>
            <td>{!! $profile->phone !!}</td>
            <td>{!! $profile->mobile !!}</td>
            <td>{!! $profile->work !!}</td>
            <td>{!! $profile->other !!}</td>
            <td>{!! $profile->is_published !!}</td>
            <td>{!! $profile->is_active !!}</td>
            <td>{!! $profile->dob !!}</td>
            <td>{!! $profile->skypeid !!}</td>
            <td>{!! $profile->githubid !!}</td>
            <td>{!! $profile->twitter_username !!}</td>
            <td>{!! $profile->instagram_username !!}</td>
            <td>{!! $profile->facebook_username !!}</td>
            <td>{!! $profile->facebook_url !!}</td>
            <td>{!! $profile->linked_in_url !!}</td>
            <td>{!! $profile->google_plus_url !!}</td>
            <td>{!! $profile->slug !!}</td>
            <td>
                {!! Form::open(['route' => ['profiles.destroy', $profile->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('profiles.show', [$profile->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('profiles.edit', [$profile->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
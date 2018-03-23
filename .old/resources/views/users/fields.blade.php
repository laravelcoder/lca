	<div class="widget pad50-65">
		<div class="profile-wrp">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-lg-12">
					<div class="profile-info-wrp">
						<div class="row mrg20">
							<!-- Name Field -->
	{{-- 						<div class="form-group col-md-6 col-sm-6 col-lg-6">
								{!! Form::label('name', 'Name:') !!}
								{!! Form::text('name', null, ['id' => 'name', 'class' => 'brd-rd5 form-control']) !!}
							</div> --}}
													<!-- Username Field -->
				{{-- 			<div class="form-group col-md-6 col-sm-6 col-lg-6">
								{!! Form::label('username', 'Username:') !!}
								{!! Form::text('username', null, ['id' => 'username', 'class' => 'brd-rd5 form-control']) !!}
							</div> --}}
							<!-- Email Field -->
							<div class="form-group col-md-6 col-sm-6 col-lg-6">
								{!! Form::label('email', 'Email:') !!}
								{!! Form::text('email', null, ['class' => 'brd-rd5 form-control']) !!}
							</div>

							<!-- Password Field -->
							<div class="form-group col-md-6 col-sm-6 col-lg-6">
								{!! Form::label('password', 'Password:') !!}
								{!! Form::text('password', null, ['class' => 'brd-rd5 form-control']) !!}
							</div>

							<!-- First Name Field -->
							<div class="form-group col-sm-6">
							    {!! Form::label('first_name', 'First Name:') !!}
							    {!! Form::text('profile[first_name]', null, ['id' => 'first_name', 'class' => 'form-control']) !!}
							</div>

							<!-- Last Name Field -->
							<div class="form-group col-sm-6">
							    {!! Form::label('last_name', 'Last Name:') !!}
							    {!! Form::text('profile[last_name]', null, ['id' => 'last_name', 'class' => 'form-control']) !!}
							    {{-- {!! Form::text('last_name', (@$profile['last_name'] ? @$profile['last_name'] : 'last name'), ['class' => 'form-control']) !!} --}}
							</div>
<!-- Website Id Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('last_name', 'Website Id:') !!}
    {!! Form::text('profile[website_id]', null, ['class' => 'form-control']) !!}
    {!! Form::text('website_id', (@$profile['website_id'] ? @$profile['website_id'] : 'website id'), ['class' => 'form-control']) !!}
</div> --}}


{{-- @if(isset($user) && $user->websites->count()>0) --}}
     <div class="widget pad50-65">
        <div class="widget-title2">
            <h4>Default Table</h4>
        </div>
        <table class="table">
            <thead>
                <tr>
                	<th></th>
                    <th>Website Name</th>
                    <th>Website</th>
					<th></th>
                </tr>
            </thead>
            <tbody>
{{--             	@foreach($user->profile->websites as $website)
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                @endforeach --}}

            </tbody>
        </table>
    </div>
{{-- @endif --}}

<div class="repeat">
	<table class="wrapper" width="100%">
		<thead>
			<tr>
				<td width="10%" colspan="4"><span class="add">Add</span></td>
			</tr>
		</thead>
		<tbody class="container">
		<tr class="template row">
			<td width="10%">
				<span class="move">Move Row</span>
				<span class="move-up">Move Up</span>
				<input type="text" class="move-steps" value="1" />
				<span class="move-down">Move Down</span>
			</td>

			<td width="10%">An Input Field</td>

			<td width="70%">
				<input type="text" name="an-input-field[]" />
			</td>

			<td width="10%"><span class="remove">Remove</span></td>
		</tr>
		</tbody>
	</table>
</div>


						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="widget pad50-65">
		<div class="profile-wrp">
			<div class="row">
				<div class="col-sm-12 col-md-4 col-lg-4">
					<div class="profile-info-wrp">
						<div class="insta-wrp col-sm-12  col-md-12 col-lg-12 ">
						     @if(Gravatar::exists(Auth::user()->email))
						          <span><img src="{{ Gravatar::src(Auth::user()->email, 142) }}" class="brd-rd00" alt="User Image" />
						          	{{-- <i class="sts away"></i> --}}
						          </span>
						      @else
						          <span><img src="{!! asset('/images/resource/topbar-usr1.jpg') !!}" alt="" /></span>
						      @endif
							<div class="insta-inf">
								<h2><a href="#" title="">{!! @$user->name !!}</a> </h2>
								{{-- <span class="desg">Product Manager <a class="blue-clr" href="#" title="">@GraphicXspace</a></span> --}}
								<div class="prf-btns">
									{{-- <a href="#" title="" class="blue-bg brd-rd0"><i class="fa fa-weixin"></i></a> --}}
									{{-- <a href="#" title="" class="green-bg brd-rd0"><i class="fa fa-envelope-o"></i> Message</a> --}}
									{{-- <a href="#" title="" class="blue-bg brd-rd0"><i class="fa fa-phone"></i></a> --}}
								</div>
							</div>
						</div>

						<!-- Name Field -->
						<div class=" col-md-12 col-sm-12 col-lg-12">
							{!! Form::label('name', 'Name:') !!}
							{!! Form::text('name', null, ['class' => 'brd-rd0']) !!}
						</div>

						<!-- Email Field -->
						<div class="form-group col-md-12 col-sm-12 col-lg-12 col-last">
							{!! Form::label('email', 'Email:') !!}
							{!! Form::text('email', null, ['class' => 'brd-rd0']) !!}
						</div>

						<!-- Username Field -->
						<div class="form-group col-md-12 col-sm-12 col-lg-12">
							{!! Form::label('username', 'Username:') !!}
							{!! Form::text('username', null, ['class' => 'brd-rd0']) !!}
						</div>

						<!-- Password Field -->
						<div class="form-group col-md-12 col-sm-12 col-lg-12">
							{!! Form::label('password', 'Password:') !!}
							{!! Form::password('password', null, ['class' => 'brd-rd0']) !!}
						</div>

@if($app->environment('local'))
    <script> if( window.console && window.console.log ) {
            console.log("%c USER FIELDS", 'background: #222; color: yellow', "loaded");
        }
    </script>
@endif


<!-- Gender Field -->
<div class="form-group col-md-12 col-sm-12 col-lg-12">
	{!! Form::label('gender', 'Gender:') !!}
	{!! Form::text('profile[gender]', null, ['class' => 'brd-rd0']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-md-12 col-sm-12 col-lg-12">
	<i class="fa fa-phone"></i> {!! Form::label('phone', 'Phone:') !!}
	{!! Form::text('profile[phone]', null, ['class' => 'brd-rd0']) !!}
</div>

<!-- Mobile Field -->
<div class="form-group col-md-12 col-sm-12 col-lg-12">
	<i class="fa fa-phone"></i> {!! Form::label('mobile', 'Mobile:') !!}
	{!! Form::text('profile[mobile]', null, ['class' => 'brd-rd0']) !!}
</div>

<!-- Work Field -->
<div class="form-group col-md-12 col-sm-12 col-lg-12">
	<i class="fa fa-phone"></i> {!! Form::label('work', 'Work:') !!}
	{!! Form::text('profile[work]', null, ['class' => 'brd-rd0']) !!}
</div>

<!-- Other Field -->
<div class="form-group col-md-12 col-sm-12 col-lg-12">
	<i class="fa fa-phone"></i> {!! Form::label('other', 'Other:') !!}
	{!! Form::text('profile[other]', null, ['class' => 'brd-rd0']) !!}
</div>

{{--  <!-- Is Published Field -->
<div class="form-group col-md-12 col-sm-12 col-lg-12">
	{!! Form::label('is_published', 'Is Published:') !!}
	<label class="checkbox-inline">

		{!! Form::checkbox('is_published', '1', null) !!} 1
	</label>
</div>

<!-- Is Active Field -->
<div class="form-group col-md-12 col-sm-12 col-lg-12">
	{!! Form::label('is_active', 'Is Active:') !!}
	<label class="checkbox-inline">

		{!! Form::checkbox('is_active', '1', null) !!} 1
	</label>
</div> --}}

<!-- Dob Field -->
<div class="form-group col-md-12 col-sm-12 col-lg-12">
	{!! Form::label('dob', 'Dob:') !!}
	{!! Form::date('profile[dob]', null, ['class' => 'brd-rd0', 'value' => old('profile[dob]')]) !!}
</div>

<!-- Skypeid Field -->
<div class="form-group col-md-12 col-sm-12 col-lg-12">
	<i class="fa fa-skype text-info"></i> {!! Form::label('skypeid', 'Skypeid:') !!}
	{!! Form::text('profile[skypeid]', null, ['class' => 'brd-rd0']) !!}
</div>

<!-- Githubid Field -->
<div class="form-group col-md-12 col-sm-12 col-lg-12">
	<i class="fa fa-github text-white"></i> {!! Form::label('githubid', 'Githubid:') !!}
	{!! Form::text('profile[githubid]', null, ['class' => 'brd-rd0']) !!}
</div>

<!-- Twitter Username Field -->
<div class="form-group col-md-12 col-sm-12 col-lg-12">
	<i class="fa fa-twitter text-info"></i> {!! Form::label('twitter_username', 'Twitter Username:') !!}
	{!! Form::text('profile[twitter_username]', null, ['class' => 'brd-rd0']) !!}
</div>

<!-- Instagram Username Field -->
<div class="form-group col-md-12 col-sm-12 col-lg-12">
	<i class="fa fa-instagram text-info"></i> {!! Form::label('instagram_username', 'Instagram Username:') !!}
	{!! Form::text('profile[instagram_username]', null, ['class' => 'brd-rd0']) !!}
</div>

<!-- Facebook Username Field -->
<div class="form-group col-md-12 col-sm-12 col-lg-12">
	<i class="fa fa-linkedin text-primary"></i> {!! Form::label('facebook_username', 'Facebook Username:') !!}
	{!! Form::text('profile[facebook_username]', null, ['class' => 'brd-rd0']) !!}
</div>

<!-- Facebook Url Field -->
<div class="form-group col-md-12 col-sm-12 col-lg-12">
	<i class="fa fa-facebook text-primary"></i> {!! Form::label('facebook_url', 'Facebook Url:') !!}
	{!! Form::text('profile[facebook_url]', null, ['class' => 'brd-rd0']) !!}
</div>

<!-- Linked In Url Field -->
<div class="form-group col-md-12 col-sm-12 col-lg-12">
	<i class="fa fa-linkedin text-primary"></i> {!! Form::label('linked_in_url', 'Linked In Url:') !!}
	{!! Form::text('profile[linked_in_url]', null, ['class' => 'brd-rd0']) !!}
</div>

<!-- Google Plus Url Field -->
<div class="form-group col-md-12 col-sm-12 col-lg-12">
	<i class="fa fa-google-plus text-success"></i> {!! Form::label('google_plus_url', 'Google Plus Url:') !!}
	{!! Form::text('profile[google_plus_url]', null, ['class' => 'brd-rd0']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-md-12 col-sm-12 col-lg-12">
	{!! Form::label('slug', 'Slug:') !!}
	{!! Form::text('profile[slug]', null, ['class' => 'form-control', 'value' => old('profile[slug]')]) !!}
</div>























					</div>
				</div>
				<div class="col-md-8 col-sm-12 col-lg-8">
					<div class="usr-actvty-wrp widget pad50-40">
						<h4 class="widget-title">Other Details</h4>




<!-- About Me Field -->
<div class="usr-abut col-sm-12 col-lg-12">
	<h5><i class="fa fa-pencil edit-btn"></i> {!! Form::label('about_me', 'About Me:') !!}</h5>
	{!! Form::textarea('profile[about_me]', null, ['class' => 'brd-rd0', 'placeholder' => 'Write about yourself...']) !!}
</div>










						<div class="website-repeat">
							<table id="websites-table" class="table"  width="100%">
								<thead>

									<tr>
										<th><i class="add fa fa-2x fa-plus text-success"></i></th>
										<th>Website Name</th>
										<th>Website</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									@if(isset($user) && $user->profile->websites)
						            	@foreach($user->profile->websites as $website)
							                <tr class="">
							                    <td>
								                    <a href="javasctipt:void(0)">  <i class="fa fa-arrow-up" onclick="upv($(this))"></i></a>
								                    <a href="javasctipt:void(0)"><i class="fa fa-arrow-down" onclick="downv($(this))"></i></a>
								                </td>
							                    <td>{!! Form::text('website[website_name]', $website->website_name, ['class' => 'brd-rd0']) !!}</td>
							                    <td>{!! Form::text('website[website]',  $website->website, ['class' => 'brd-rd0']) !!}</td>
							                    <td><span class="remove"><i class="fa fa-trash fa-lg text-danger"></i></span></td>
							                </tr>
						                @endforeach

										<tr class="template row">
						                    <td>
							                    <a href="javasctipt:void(0)"><i class="fa fa-arrow-up fa-lg" onclick="upv($(this))"></i></a>
							                    <a href="javasctipt:void(0)"><i class="fa fa-arrow-down fa-lg" onclick="downv($(this))"></i></a>
							                </td>
											<td><input class="brd-rd0" id="website-name-input" name="websites[{row-count-placeholder}][website_name]" type="text"></td>
											<td><input class="brd-rd0" id="website-input" name="websites[{row-count-placeholder}][website]" type="text"></td>
											<td><span class="remove"><i class="fa fa-trash fa-lg"></i></span></td>
										</tr>
									@endif

								</tbody>
							</table>
						</div>

<div style="clear:both"></div>

{{-- @if(isset($user) && $user->profile->websites)
     <div class="widget pad50-65">
        <div class="widget-title2">
            <h4>Default Table</h4>
        </div>
        <div class="repeat">
	        <table id="websites-table" class="table">
	            <thead>
	                <tr>
	                	<th><span class="add btn btn-success">Add</span></th>
	                    <th>Website Name</th>
	                    <th>Website</th>
						<th></th>
	                </tr>
	            </thead>
	            <tbody>
	            	@foreach($user->profile->websites as $website)
	                <tr class="template row">
	                    <th scope="row"></th>
	                    <td>{{ $website->website_name }}</td>
	                    <td>{{ $website->website }}</td>
	                    <td><span class="remove"><i class="far fa-trash"></i></span></td>
	                </tr>
	                @endforeach
	            </tbody>
	        </table>
	    </div>
    </div>


@if($app->environment('local'))
    <script> if( window.console && window.console.log ) {
            console.log("%c USER PROFILE WEBSITE FIELDS", 'background: #222; color: yellow', "loaded");
        }
    </script>
@endif

@endif --}}

{{-- <div class="repeat">
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
				<input type="text" name="an-input-field[{row-count-placeholder}]" />
			</td>

			<td width="10%"><span class="remove">Remove</span></td>
		</tr>
		</tbody>
	</table>
</div> --}}

	{{-- <form action="POST" action="/users/{{ $user->id }}/website">

	<!-- Name Field -->
	<div class="form-group col-sm-6">
	    {!! Form::label('website_name', 'Website Name:') !!}
	    {!! Form::text('websites[website_name]', null, ['class' => 'form-control']) !!}
	</div>

	<!-- Website Field -->
	<div class="form-group col-sm-6">
	    {!! Form::label('website', 'Website:') !!}
	    {!! Form::text('websites[website]', null, ['class' => 'form-control']) !!}
	</div>

	<button class="green-bg brd-rd0" type="submit"><i class="fa fa-paper-plane"></i> Registration Completed</button>
	</form> --}}


					</div>
				</div>
			</div>
		</div>
	</div>

<script>
	    function upv($this) {
            $this.parents('tr').insertBefore($this.parents('tr').prev('tr'));
        }
        function downv($this) {
            $this.parents('tr').insertAfter($this.parents('tr').next('tr'));
        }
	$(document).ready(function () {

		$('.website-repeat').each(function () {
		    $(this).repeatable_fields({
		        wrapper: 'table',
		        container: 'tbody',
		        row: 'tr',
		        cell: 'td',
		        add: '.add',
		        remove: '.remove',
		        move: '.move',
		        template: '.template',
		        before_add: null,
		        after_add:  self.after_add,
		        before_remove: null,
		        after_remove: null,
		        sortable_options: {
		            placeholder: "template",
		            //forcePlaceholderSize: true,
		            opacity: 0.5
		        },
		        row_count_placeholder: '{row-count-placeholder}',
		    });
		});
		$('.add').click();
			var _all = new Array();
		$('.save').click(function(e){
		    e.preventDefault();
		    console.log($("#websites-table").serializeArray());
			    $('#websites-table tbody tr:gt(0)').each(function() {
			        _all.push({ 'website_name': $(this).find('td:nth-of-type(2) input').val(), 'website': $(this).find('td:nth-of-type(3) input').val()
			    });
		    });
		    console.log(_all);
		});
	});
</script>


@if($app->environment('local'))
    <script> if( window.console && window.console.log ) {
            console.log("%c USER PROFILE FIELDS", 'background: #222; color: yellow', "loaded");
        }
    </script>
@endif
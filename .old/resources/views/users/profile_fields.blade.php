<!-- Photo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('photo', 'Photo:') !!}
    {!! Form::text('profile[photo]', null, ['class' => 'form-control']) !!}
</div>

<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('profile[first_name]', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', 'Last Name:') !!}
    {!! Form::text('profile[last_name]', null, ['class' => 'form-control']) !!}
</div>

<!-- Uuid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('uuid', 'Uuid:') !!}
    {!! Form::text('profile[uuid]', null, ['class' => 'form-control']) !!}
</div>

<!-- About Me Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('about_me', 'About Me:') !!}
    {!! Form::textarea('profile[about_me]', null, ['class' => 'form-control']) !!}
</div>

<!-- Website Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('website_id', 'Website Id:') !!}
    {!! Form::text('profile[website_id]', null, ['class' => 'form-control']) !!}
</div>

<!-- Company Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company', 'Company:') !!}
    {!! Form::text('profile[company]', null, ['class' => 'form-control']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', 'Gender:') !!}
    {!! Form::text('profile[gender]', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('profile[phone]', null, ['class' => 'form-control']) !!}
</div>

<!-- Mobile Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mobile', 'Mobile:') !!}
    {!! Form::text('profile[mobile]', null, ['class' => 'form-control']) !!}
</div>

<!-- Work Field -->
<div class="form-group col-sm-6">
    {!! Form::label('work', 'Work:') !!}
    {!! Form::text('profile[work]', null, ['class' => 'form-control']) !!}
</div>

<!-- Other Field -->
<div class="form-group col-sm-6">
    {!! Form::label('other', 'Other:') !!}
    {!! Form::text('profile[other]', null, ['class' => 'form-control']) !!}
</div>

<!-- Is Published Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_published', 'Is Published:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_published', false) !!}
        {!! Form::checkbox('is_published', '1', null) !!} 1
    </label>
</div>

<!-- Is Active Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_active', 'Is Active:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_active', false) !!}
        {!! Form::checkbox('is_active', '1', null) !!} 1
    </label>
</div>

<!-- Dob Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dob', 'Dob:') !!}
    {!! Form::date('profile[dob]', null, ['class' => 'form-control', 'value' => old('profile[dob]')]) !!}
</div>

<!-- Skypeid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('skypeid', 'Skypeid:') !!}
    {!! Form::text('profile[skypeid]', null, ['class' => 'form-control']) !!}
</div>

<!-- Githubid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('githubid', 'Githubid:') !!}
    {!! Form::text('profile[githubid]', null, ['class' => 'form-control']) !!}
</div>

<!-- Twitter Username Field -->
<div class="form-group col-sm-6">
    {!! Form::label('twitter_username', 'Twitter Username:') !!}
    {!! Form::text('profile[twitter_username]', null, ['class' => 'form-control']) !!}
</div>

<!-- Instagram Username Field -->
<div class="form-group col-sm-6">
    {!! Form::label('instagram_username', 'Instagram Username:') !!}
    {!! Form::text('profile[instagram_username]', null, ['class' => 'form-control']) !!}
</div>

<!-- Facebook Username Field -->
<div class="form-group col-sm-6">
    {!! Form::label('facebook_username', 'Facebook Username:') !!}
    {!! Form::text('profile[facebook_username]', null, ['class' => 'form-control']) !!}
</div>

<!-- Facebook Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('facebook_url', 'Facebook Url:') !!}
    {!! Form::text('profile[facebook_url]', null, ['class' => 'form-control']) !!}
</div>

<!-- Linked In Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('linked_in_url', 'Linked In Url:') !!}
    {!! Form::text('profile[linked_in_url]', null, ['class' => 'form-control']) !!}
</div>

<!-- Google Plus Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('google_plus_url', 'Google Plus Url:') !!}
    {!! Form::text('profile[google_plus_url]', null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('profile[slug]', null, ['class' => 'form-control', 'value' => old('profile[slug]')]) !!}
</div>


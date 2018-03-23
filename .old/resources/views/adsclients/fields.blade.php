<!-- Developer Token Field -->
<div class="col-md-6 col-sm-6 col-lg-6">
 {{--    {!! Form::label('developer_token', 'Developer Token:') !!} --}}
    {!! Form::text('developer_token', null, ['id' => 'inputdeveloper_token', 'class' => 'brd-rd5', 'placeholder' => 'Developer Token']) !!}
</div>


<!-- Client Customer Id Field -->
<div class="col-md-6 col-sm-6 col-lg-6">
 {{--    {!! Form::label('client_customer_id', 'Client Customer Id:') !!} --}}
    {!! Form::text('client_customer_id', null, ['id' => 'inputclient_customer_id', 'class' => 'brd-rd5', 'placeholder' => 'Client Customer Id']) !!}
</div>


<!-- User Agent Field -->
<div class="col-md-6 col-sm-6 col-lg-6">
 {{--    {!! Form::label('user_agent', 'User Agent:') !!} --}}
    {!! Form::text('user_agent', null, ['id' => 'inputuser_agent', 'class' => 'brd-rd5', 'placeholder' => 'User Agent']) !!}
</div>


<!-- Client Id Field -->
<div class="col-md-6 col-sm-6 col-lg-6">
 {{--    {!! Form::label('client_id', 'Client Id:') !!} --}}
    {!! Form::text('client_id', null, ['id' => 'inputclient_id', 'class' => 'brd-rd5', 'placeholder' => 'Client Id']) !!}
</div>


<!-- Client Secret Field -->
<div class="col-md-6 col-sm-6 col-lg-6">
 {{--    {!! Form::label('client_secret', 'Client Secret:') !!} --}}
    {!! Form::text('client_secret', null, ['id' => 'inputclient_secret', 'class' => 'brd-rd5', 'placeholder' => 'Client Secret']) !!}
</div>


<!-- Refresh Token Field -->
<div class="col-md-6 col-sm-6 col-lg-6">
 {{--    {!! Form::label('refresh_token', 'Refresh Token:') !!} --}}
    {!! Form::text('refresh_token', null, ['id' => 'inputrefresh_token', 'class' => 'brd-rd5', 'placeholder' => 'Refresh Token']) !!}
</div>


<!-- Authorization Uri Field -->
<div class="col-md-6 col-sm-6 col-lg-6">
 {{--    {!! Form::label('authorization_uri', 'Authorization Uri:') !!} --}}
    {!! Form::text('authorization_uri', null, ['id' => 'inputauthorization_uri', 'class' => 'brd-rd5', 'placeholder' => 'Authorization Uri']) !!}
</div>


<!-- Redirect Uri Field -->
<div class="col-md-6 col-sm-6 col-lg-6">
 {{--    {!! Form::label('redirect_uri', 'Redirect Uri:') !!} --}}
    {!! Form::text('redirect_uri', null, ['id' => 'inputredirect_uri', 'class' => 'brd-rd5', 'placeholder' => 'Redirect Uri']) !!}
</div>


<!-- Token Credential Uri Field -->
<div class="col-md-6 col-sm-6 col-lg-6">
 {{--    {!! Form::label('token_credential_uri', 'Token Credential Uri:') !!} --}}
    {!! Form::text('token_credential_uri', null, ['id' => 'inputtoken_credential_uri', 'class' => 'brd-rd5', 'placeholder' => 'Token Credential Uri']) !!}
</div>


<!-- Scope Field -->
<div class="col-md-6 col-sm-6 col-lg-6">
 {{--    {!! Form::label('scope', 'Scope:') !!} --}}
    {!! Form::text('scope', null, ['id' => 'inputscope', 'class' => 'brd-rd5', 'placeholder' => 'Scope']) !!}
</div>


<!-- User Id Field -->
<div class="col-md-6 col-sm-6 col-lg-6">
 {{--    {!! Form::label('user_id', 'User Id:') !!} --}}
    {!! Form::text('user_id', null, ['id' => 'inputuser_id', 'class' => 'brd-rd5', 'placeholder' => 'User Id']) !!}
</div>


<!-- Clinic Id Field -->
<div class="col-md-6 col-sm-6 col-lg-6">
 {{--    {!! Form::label('clinic_id', 'Clinic Id:') !!} --}}
    {!! Form::text('clinic_id', null, ['id' => 'inputclinic_id', 'class' => 'brd-rd5', 'placeholder' => 'Clinic Id']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('adsclients.index') !!}" class="btn btn-default">Cancel</a>
</div>

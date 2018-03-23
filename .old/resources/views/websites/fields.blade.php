<!-- Website Name Field -->
<div class="col-md-6 col-sm-6 col-lg-6">
 {{--    {!! Form::label('website_name', 'Website Name:') !!} --}}
    {!! Form::text('website_name', null, ['id' => 'inputwebsite_name', 'class' => 'brd-rd5', 'placeholder' => 'Website Name']) !!}
</div>


<!-- Website Field -->
<div class="col-md-6 col-sm-6 col-lg-6">
 {{--    {!! Form::label('website', 'Website:') !!} --}}
    {!! Form::text('website', null, ['id' => 'inputwebsite', 'class' => 'brd-rd5', 'placeholder' => 'Website']) !!}
</div>


<!-- Clinic Id Field -->
<div class="col-md-6 col-sm-6 col-lg-6">
 {{--    {!! Form::label('clinic_id', 'Clinic Id:') !!} --}}
    {!! Form::text('clinic_id', null, ['id' => 'inputclinic_id', 'class' => 'brd-rd5', 'placeholder' => 'Clinic Id']) !!}
</div>


<!-- Profile Id Field -->
<div class="col-md-6 col-sm-6 col-lg-6">
 {{--    {!! Form::label('profile_id', 'Profile Id:') !!} --}}
    {!! Form::text('profile_id', null, ['id' => 'inputprofile_id', 'class' => 'brd-rd5', 'placeholder' => 'Profile Id']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('websites.index') !!}" class="btn btn-default">Cancel</a>
</div>

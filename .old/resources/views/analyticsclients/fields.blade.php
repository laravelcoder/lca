<!-- View Id Field -->
<div class="col-md-6 col-sm-6 col-lg-6">
 {{--    {!! Form::label('view_id', 'View Id:') !!} --}}
    {!! Form::text('view_id', null, ['id' => 'inputview_id', 'class' => 'brd-rd5', 'placeholder' => 'View Id']) !!}
</div>


<!-- View Url Field -->
<div class="col-md-6 col-sm-6 col-lg-6">
 {{--    {!! Form::label('view_url', 'View Url:') !!} --}}
    {!! Form::text('view_url', null, ['id' => 'inputview_url', 'class' => 'brd-rd5', 'placeholder' => 'View Url']) !!}
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
    <a href="{!! route('analyticsclients.index') !!}" class="btn btn-default">Cancel</a>
</div>

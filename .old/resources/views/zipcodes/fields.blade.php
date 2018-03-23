<!-- Zip Field -->
<div class="form-group col-sm-6">
    {!! Form::label('zip', 'Zip:') !!}
    {!! Form::text('zip', null, ['class' => 'form-control']) !!}
</div>

<!-- Location Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('location_id', 'Location Id:') !!}
    {!! Form::number('location_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Clinic Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clinic_id', 'Clinic Id:') !!}
    {!! Form::number('clinic_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('zipcodes.index') !!}" class="btn btn-default">Cancel</a>
</div>

<!-- Clinic Name Field -->
<div class="form-group col-md-6 col-sm-6 col-lg-6">
    {!! Form::label('clinic_name', 'Clinic Name:') !!}
    {!! Form::text('clinic_name', null, ['id' => 'inputclinic_name', 'class' => 'brd-rd5', 'placeholder' => 'Clinic Name']) !!}
</div>


<!-- Device Count Field -->
<div class="form-group col-md-6 col-sm-6 col-lg-6">
    {!! Form::label('device_count', 'Device Count:') !!}
    {!! Form::text('device_count', null, ['id' => 'inputdevice_count', 'class' => 'brd-rd5', 'placeholder' => 'Device Count']) !!}
</div>


<!-- Clinic Number Field -->
<div class="form-group col-md-6 col-sm-6 col-lg-6">
    {!! Form::label('clinic_number', 'Clinic Number:') !!}
    {!! Form::text('clinic_number', null, ['id' => 'inputclinic_number', 'class' => 'brd-rd5', 'placeholder' => 'Clinic Number']) !!}
</div>


<!-- Date Opened Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_opened', 'Date Opened:') !!}
    {!! Form::date('date_opened', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('clinics.index') !!}" class="btn btn-default">Cancel</a>
</div>

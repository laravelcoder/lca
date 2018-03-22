<tr data-index="{{ $index }}">
    <td>{!! Form::text('locations['.$index.'][nickname]', old('locations['.$index.'][nickname]', isset($field) ? $field->nickname: ''), ['class' => 'form-control']) !!}</td>
<td>{!! Form::text('locations['.$index.'][address]', old('locations['.$index.'][address]', isset($field) ? $field->address: ''), ['class' => 'form-control']) !!}</td>
<td>{!! Form::text('locations['.$index.'][address_2]', old('locations['.$index.'][address_2]', isset($field) ? $field->address_2: ''), ['class' => 'form-control']) !!}</td>
<td>{!! Form::text('locations['.$index.'][city]', old('locations['.$index.'][city]', isset($field) ? $field->city: ''), ['class' => 'form-control']) !!}</td>
<td>{!! Form::text('locations['.$index.'][state]', old('locations['.$index.'][state]', isset($field) ? $field->state: ''), ['class' => 'form-control']) !!}</td>
<td>{!! Form::text('locations['.$index.'][phone]', old('locations['.$index.'][phone]', isset($field) ? $field->phone: ''), ['class' => 'form-control']) !!}</td>

    <td>
        <a href="#" class="remove btn btn-xs btn-danger">@lang('quickadmin.qa_delete')</a>
    </td>
</tr>
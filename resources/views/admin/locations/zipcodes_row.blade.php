<tr data-index="{{ $index }}">
    <td>{!! Form::text('zipcodes['.$index.'][zipcode]', old('zipcodes['.$index.'][zipcode]', isset($field) ? $field->zipcode: ''), ['class' => 'form-control']) !!}</td>

    <td>
        <a href="#" class="remove btn btn-xs btn-danger">@lang('quickadmin.qa_delete')</a>
    </td>
</tr>
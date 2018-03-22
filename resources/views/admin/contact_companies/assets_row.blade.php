<tr data-index="{{ $index }}">
    <td>{!! Form::text('assets['.$index.'][serial_number]', old('assets['.$index.'][serial_number]', isset($field) ? $field->serial_number: ''), ['class' => 'form-control']) !!}</td>
<td>{!! Form::text('assets['.$index.'][title]', old('assets['.$index.'][title]', isset($field) ? $field->title: ''), ['class' => 'form-control']) !!}</td>

    <td>
        <a href="#" class="remove btn btn-xs btn-danger">@lang('quickadmin.qa_delete')</a>
    </td>
</tr>
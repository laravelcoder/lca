<tr data-index="{{ $index }}">
    <td>{!! Form::text('websites['.$index.'][website]', old('websites['.$index.'][website]', isset($field) ? $field->website: ''), ['class' => 'form-control']) !!}</td>

    <td>
        <a href="#" class="remove btn btn-xs btn-danger">@lang('quickadmin.qa_delete')</a>
    </td>
</tr>
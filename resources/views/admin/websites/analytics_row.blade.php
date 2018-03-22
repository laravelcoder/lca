<tr data-index="{{ $index }}">
    <td>{!! Form::text('analytics['.$index.'][view_name]', old('analytics['.$index.'][view_name]', isset($field) ? $field->view_name: ''), ['class' => 'form-control']) !!}</td>
<td>{!! Form::text('analytics['.$index.'][view_id]', old('analytics['.$index.'][view_id]', isset($field) ? $field->view_id: ''), ['class' => 'form-control']) !!}</td>

    <td>
        <a href="#" class="remove btn btn-xs btn-danger">@lang('quickadmin.qa_delete')</a>
    </td>
</tr>
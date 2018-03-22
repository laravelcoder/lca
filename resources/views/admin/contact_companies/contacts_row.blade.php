<tr data-index="{{ $index }}">
    <td>{!! Form::text('contacts['.$index.'][first_name]', old('contacts['.$index.'][first_name]', isset($field) ? $field->first_name: ''), ['class' => 'form-control']) !!}</td>
<td>{!! Form::text('contacts['.$index.'][last_name]', old('contacts['.$index.'][last_name]', isset($field) ? $field->last_name: ''), ['class' => 'form-control']) !!}</td>
<td>{!! Form::text('contacts['.$index.'][phone1]', old('contacts['.$index.'][phone1]', isset($field) ? $field->phone1: ''), ['class' => 'form-control']) !!}</td>
<td>{!! Form::text('contacts['.$index.'][phone2]', old('contacts['.$index.'][phone2]', isset($field) ? $field->phone2: ''), ['class' => 'form-control']) !!}</td>
<td>{!! Form::text('contacts['.$index.'][email]', old('contacts['.$index.'][email]', isset($field) ? $field->email: ''), ['class' => 'form-control']) !!}</td>
<td>{!! Form::text('contacts['.$index.'][skype]', old('contacts['.$index.'][skype]', isset($field) ? $field->skype: ''), ['class' => 'form-control']) !!}</td>
<td>{!! Form::text('contacts['.$index.'][twitter_username]', old('contacts['.$index.'][twitter_username]', isset($field) ? $field->twitter_username: ''), ['class' => 'form-control']) !!}</td>
<td>{!! Form::text('contacts['.$index.'][instagram_username]', old('contacts['.$index.'][instagram_username]', isset($field) ? $field->instagram_username: ''), ['class' => 'form-control']) !!}</td>
<td>{!! Form::text('contacts['.$index.'][facebook_url]', old('contacts['.$index.'][facebook_url]', isset($field) ? $field->facebook_url: ''), ['class' => 'form-control']) !!}</td>
<td>{!! Form::text('contacts['.$index.'][linked_in_url]', old('contacts['.$index.'][linked_in_url]', isset($field) ? $field->linked_in_url: ''), ['class' => 'form-control']) !!}</td>
<td>{!! Form::text('contacts['.$index.'][google_plus_url]', old('contacts['.$index.'][google_plus_url]', isset($field) ? $field->google_plus_url: ''), ['class' => 'form-control']) !!}</td>
<td>{!! Form::text('contacts['.$index.'][personal_website]', old('contacts['.$index.'][personal_website]', isset($field) ? $field->personal_website: ''), ['class' => 'form-control']) !!}</td>

    <td>
        <a href="#" class="remove btn btn-xs btn-danger">@lang('quickadmin.qa_delete')</a>
    </td>
</tr>
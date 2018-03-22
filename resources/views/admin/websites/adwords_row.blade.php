<tr data-index="{{ $index }}">
    <td>{!! Form::text('adwords['.$index.'][client_customer_id]', old('adwords['.$index.'][client_customer_id]', isset($field) ? $field->client_customer_id: ''), ['class' => 'form-control']) !!}</td>
<td>{!! Form::text('adwords['.$index.'][user_agent]', old('adwords['.$index.'][user_agent]', isset($field) ? $field->user_agent: ''), ['class' => 'form-control']) !!}</td>
<td>{!! Form::text('adwords['.$index.'][client_id]', old('adwords['.$index.'][client_id]', isset($field) ? $field->client_id: ''), ['class' => 'form-control']) !!}</td>
<td>{!! Form::text('adwords['.$index.'][client_secret]', old('adwords['.$index.'][client_secret]', isset($field) ? $field->client_secret: ''), ['class' => 'form-control']) !!}</td>
<td>{!! Form::text('adwords['.$index.'][refresh_token]', old('adwords['.$index.'][refresh_token]', isset($field) ? $field->refresh_token: ''), ['class' => 'form-control']) !!}</td>
<td>{!! Form::text('adwords['.$index.'][authorization_uri]', old('adwords['.$index.'][authorization_uri]', isset($field) ? $field->authorization_uri: ''), ['class' => 'form-control']) !!}</td>
<td>{!! Form::text('adwords['.$index.'][redirect_uri]', old('adwords['.$index.'][redirect_uri]', isset($field) ? $field->redirect_uri: ''), ['class' => 'form-control']) !!}</td>
<td>{!! Form::text('adwords['.$index.'][token_credential_uri]', old('adwords['.$index.'][token_credential_uri]', isset($field) ? $field->token_credential_uri: ''), ['class' => 'form-control']) !!}</td>
<td>{!! Form::text('adwords['.$index.'][scope]', old('adwords['.$index.'][scope]', isset($field) ? $field->scope: ''), ['class' => 'form-control']) !!}</td>

    <td>
        <a href="#" class="remove btn btn-xs btn-danger">@lang('quickadmin.qa_delete')</a>
    </td>
</tr>
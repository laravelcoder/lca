@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.adwords.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.adwords.fields.client-customer-id')</th>
                            <td field-key='client_customer_id'>{{ $adword->client_customer_id }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.adwords.fields.user-agent')</th>
                            <td field-key='user_agent'>{{ $adword->user_agent }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.adwords.fields.client-id')</th>
                            <td field-key='client_id'>{{ $adword->client_id }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.adwords.fields.client-secret')</th>
                            <td field-key='client_secret'>{{ $adword->client_secret }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.adwords.fields.refresh-token')</th>
                            <td field-key='refresh_token'>{{ $adword->refresh_token }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.adwords.fields.authorization-uri')</th>
                            <td field-key='authorization_uri'>{{ $adword->authorization_uri }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.adwords.fields.redirect-uri')</th>
                            <td field-key='redirect_uri'>{{ $adword->redirect_uri }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.adwords.fields.token-credential-uri')</th>
                            <td field-key='token_credential_uri'>{{ $adword->token_credential_uri }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.adwords.fields.scope')</th>
                            <td field-key='scope'>{{ $adword->scope }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.adwords.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop

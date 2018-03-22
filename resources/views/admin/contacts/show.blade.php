@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.contacts.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.contacts.fields.first-name')</th>
                            <td field-key='first_name'>{{ $contact->first_name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.contacts.fields.last-name')</th>
                            <td field-key='last_name'>{{ $contact->last_name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.contacts.fields.phone1')</th>
                            <td field-key='phone1'>{{ $contact->phone1 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.contacts.fields.phone2')</th>
                            <td field-key='phone2'>{{ $contact->phone2 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.contacts.fields.email')</th>
                            <td field-key='email'>{{ $contact->email }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.contacts.fields.skype')</th>
                            <td field-key='skype'>{{ $contact->skype }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.contacts.fields.twitter-username')</th>
                            <td field-key='twitter_username'>{{ $contact->twitter_username }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.contacts.fields.instagram-username')</th>
                            <td field-key='instagram_username'>{{ $contact->instagram_username }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.contacts.fields.facebook-url')</th>
                            <td field-key='facebook_url'>{{ $contact->facebook_url }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.contacts.fields.linked-in-url')</th>
                            <td field-key='linked_in_url'>{{ $contact->linked_in_url }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.contacts.fields.google-plus-url')</th>
                            <td field-key='google_plus_url'>{{ $contact->google_plus_url }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.contacts.fields.personal-website')</th>
                            <td field-key='personal_website'>{{ $contact->personal_website }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.contacts.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop

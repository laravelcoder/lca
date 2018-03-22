<?php

namespace App\Http\Controllers\Admin;

use App\ContactCompany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreContactCompaniesRequest;
use App\Http\Requests\Admin\UpdateContactCompaniesRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class ContactCompaniesController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of ContactCompany.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('contact_company_access')) {
            return abort(401);
        }


                $contact_companies = ContactCompany::all();

        return view('admin.contact_companies.index', compact('contact_companies'));
    }

    /**
     * Show the form for creating new ContactCompany.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('contact_company_create')) {
            return abort(401);
        }
        return view('admin.contact_companies.create');
    }

    /**
     * Store a newly created ContactCompany in storage.
     *
     * @param  \App\Http\Requests\StoreContactCompaniesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContactCompaniesRequest $request)
    {
        if (! Gate::allows('contact_company_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $contact_company = ContactCompany::create($request->all());

        foreach ($request->input('locations', []) as $data) {
            $contact_company->locations()->create($data);
        }
        foreach ($request->input('contacts', []) as $data) {
            $contact_company->contacts()->create($data);
        }
        foreach ($request->input('assets', []) as $data) {
            $contact_company->assets()->create($data);
        }


        return redirect()->route('admin.contact_companies.index');
    }


    /**
     * Show the form for editing ContactCompany.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('contact_company_edit')) {
            return abort(401);
        }
        $contact_company = ContactCompany::findOrFail($id);

        return view('admin.contact_companies.edit', compact('contact_company'));
    }

    /**
     * Update ContactCompany in storage.
     *
     * @param  \App\Http\Requests\UpdateContactCompaniesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContactCompaniesRequest $request, $id)
    {
        if (! Gate::allows('contact_company_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $contact_company = ContactCompany::findOrFail($id);
        $contact_company->update($request->all());

        $locations           = $contact_company->locations;
        $currentLocationData = [];
        foreach ($request->input('locations', []) as $index => $data) {
            if (is_integer($index)) {
                $contact_company->locations()->create($data);
            } else {
                $id                          = explode('-', $index)[1];
                $currentLocationData[$id] = $data;
            }
        }
        foreach ($locations as $item) {
            if (isset($currentLocationData[$item->id])) {
                $item->update($currentLocationData[$item->id]);
            } else {
                $item->delete();
            }
        }
        $contacts           = $contact_company->contacts;
        $currentContactData = [];
        foreach ($request->input('contacts', []) as $index => $data) {
            if (is_integer($index)) {
                $contact_company->contacts()->create($data);
            } else {
                $id                          = explode('-', $index)[1];
                $currentContactData[$id] = $data;
            }
        }
        foreach ($contacts as $item) {
            if (isset($currentContactData[$item->id])) {
                $item->update($currentContactData[$item->id]);
            } else {
                $item->delete();
            }
        }
        $assets           = $contact_company->assets;
        $currentAssetData = [];
        foreach ($request->input('assets', []) as $index => $data) {
            if (is_integer($index)) {
                $contact_company->assets()->create($data);
            } else {
                $id                          = explode('-', $index)[1];
                $currentAssetData[$id] = $data;
            }
        }
        foreach ($assets as $item) {
            if (isset($currentAssetData[$item->id])) {
                $item->update($currentAssetData[$item->id]);
            } else {
                $item->delete();
            }
        }


        return redirect()->route('admin.contact_companies.index');
    }


    /**
     * Display ContactCompany.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('contact_company_view')) {
            return abort(401);
        }
        $locations = \App\Location::where('company_id', $id)->get();$contacts = \App\Contact::where('company_id', $id)->get();$assets = \App\Asset::where('assigned_clinic_id', $id)->get();

        $contact_company = ContactCompany::findOrFail($id);

        return view('admin.contact_companies.show', compact('contact_company', 'locations', 'contacts', 'assets'));
    }


    /**
     * Remove ContactCompany from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('contact_company_delete')) {
            return abort(401);
        }
        $contact_company = ContactCompany::findOrFail($id);
        $contact_company->delete();

        return redirect()->route('admin.contact_companies.index');
    }

    /**
     * Delete all selected ContactCompany at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('contact_company_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = ContactCompany::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}

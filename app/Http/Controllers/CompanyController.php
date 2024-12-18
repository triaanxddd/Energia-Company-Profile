<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $companies = Company::latest()->get();

        return view('admin.companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'logo' => 'required|mimes:pdf,png,jpg|file|max:2048',
        ]);

        if($request->hasFile('logo')){
            $validateData['logo'] = $request->file('logo')->store('logo-companies');
        }

        Company::create($validateData);

        return redirect('admin/company')->with('success', 'Logo perusahaan berhasil ditambah');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        $companyData = Company::where('id', $company->id)->first();

        return view('admin.companies.edit', compact('companyData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $rule = [
            'name' => 'required|max:255',
            'logo' => 'mimes:pdf,png,jpg|file|max:2048',
        ];
        
        $validateData = $request->validate($rule);
        if($request->file('logo')){
            if($request->oldLogo){
                Storage::delete($request->oldLogo);
            }
            $validateData['logo'] = $request->file('logo')->store('logo-companies');
        }

        $company->update($validateData);

        return redirect('admin/company')->with('success', 'Logo perusahaan berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        if($company->logo){
            Storage::delete($company->logo);
        }
        $company->delete();
        return redirect('admin/company')->with('success', 'Logo perusahaan berhasil diubah');

    }
}

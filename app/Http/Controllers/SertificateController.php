<?php

namespace App\Http\Controllers;

use App\Models\Sertificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sertificates = Sertificate::latest()->get();

        return view('admin.sertificates.index', compact('sertificates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sertificates.create');
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
            'logo' => 'required|mimes:,png,jpg|file|max:2048',
            'document' => 'required|mimes:png,jpg|file'
        ]);

        if($request->hasFile('logo')){
            $validateData['logo'] = $request->file('logo')->store('sertificates-file');
        }
        if($request->hasFile('document')){
            $validateData['document'] = $request->file('document')->store('sertificates-file');
        }

        Sertificate::create($validateData);

        return redirect('admin/sertificate')->with('success', 'Sertifikat berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Sertificate $sertificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Sertificate $sertificate)
    {
        return view('admin.sertificates.edit', compact('sertificate'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sertificate $sertificate)
    {
        $rule = [
            'name' => 'required|max:255',
            'logo' => 'mimes:png,jpg|file|max:2048',
            'document' => 'mimes:pdf,png,jpg|file|max:2048',
        ];
        
        $validateData = $request->validate($rule);

        if($request->file('logo')){
            if($request->oldLogo){
                Storage::delete($request->oldLogo);
            }
            $validateData['logo'] = $request->file('logo')->store('logo-companies');
        }

        if($request->file('document')){
            if($request->oldDocument){
                Storage::delete($request->oldDocument);
            }
            $validateData['document'] = $request->file('document')->store('sertificates-file');
        }
        if($request->file('document2')){
            if($request->oldDocument2){
                Storage::delete($request->oldDocument2);
            }
            $validateData['document2'] = $request->file('document2')->store('sertificates-file');
        }
        $sertificate->update($validateData);

        return redirect('admin/sertificate')->with('success', 'Logo perusahaan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sertificate $sertificate)
    {
        if($sertificate->logo){
            Storage::delete($sertificate->logo);
        }
        if($sertificate->document){
            Storage::delete($sertificate->document);
        }
        $sertificate->delete();
        return redirect('admin/sertificate')->with('success', 'Logo perusahaan berhasil diubah');

    }
}

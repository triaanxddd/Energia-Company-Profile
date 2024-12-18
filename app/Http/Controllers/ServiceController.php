<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::latest()->paginate(25);

        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');

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
            'picture' => 'mimes:,png,jpg|file|max:2048',

            'description' => 'required',
        ]);
        if($request->hasFile('picture')){
            $validateData['picture'] = $request->file('picture')->store('services-file');
        }
        Service::create($validateData);

        return redirect()->route('services.index')->with('success','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $service = Service::find($service->id);

        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $rule = [
            'name'=> 'required|max:255',
            'description'=> 'required',
            'picture' => 'mimes:,png,jpg|file|max:2048',

        ];
        $validateData = $request->validate($rule);

        if($request->file('picture')){
            if($request->oldPicture){
                Storage::delete($request->oldPicture);
            }
            $validateData['picture'] = $request->file('picture')->store('picture-companies');
        }

        $service->update($validateData);
        return redirect()->route('services.index')->with('success','Data Berhasil diubah');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service = Service::find($service->id);

        $service->delete();
        return redirect()->route('services.index')->with('success','Data Berhasil dihapus');
    }
}

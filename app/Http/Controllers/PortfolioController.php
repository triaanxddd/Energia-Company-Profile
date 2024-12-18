<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::latest()->paginate(10);
        return view('admin.portfolios.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolios.create');

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
            'picture' => 'required|mimes:pdf,png,jpg|file|max:2048',
        ]);

        if($request->hasFile('picture')){
            $validateData['picture'] = $request->file('picture')->store('portfolio-pictures');
        }

        Portfolio::create($validateData);

        return redirect('admin/portfolios')->with('success', 'Gambar  berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        $portfolio = Portfolio::where('id', $portfolio->id)->first();

        return view('admin.portfolios.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $rule = [
            'name' => 'required|max:255',
            'picture' => 'mimes:pdf,png,jpg|file|max:2048',
        ];
        
        $validateData = $request->validate($rule);
        if($request->file('picture')){
            if($request->oldPicture){
                Storage::delete($request->oldPicture);
            }
            $validateData['picture'] = $request->file('picture')->store('portfolio-pictures');
        }

        $portfolio->update($validateData);

        return redirect('admin/portfolios')->with('success', 'Gambar berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        if($portfolio->picture){
            Storage::delete($portfolio->picture);
        }
        $portfolio->delete();
        return redirect('admin/portfolios')->with('success', 'Gambar dihapus');
    }
}

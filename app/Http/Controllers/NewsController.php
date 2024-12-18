<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newses = News::latest()->paginate(25);

        return view('admin.news.index', compact('newses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'picture' => 'mimes:png,jpg,pdf|file|max:20480',
            'date_uploaded' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('picture')) {
            $validatedData['picture'] = $request->file('picture')->store('news-pictures', 'public');
        }
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->description), 200, '...');
        News::create($validatedData);
    
        return redirect('/admin/news')->with('success', 'News telah dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $rule = [
            'title' => 'required',
            'picture' => 'mimes:png,jpg,pdf|file|max:20480',
            'date_uploaded' => 'required',
            'description' => 'required'
        ];
        
        $validateData = $request->validate($rule);
        
        if($request->file('picture')){
            if($request->oldPicture){
                Storage::delete($request->oldPicture);
            }
            $validateData['picture'] = $request->file('picture')->store('news-pictures');
        }
        $validatedData['excerpt'] = Str::limit(strip_tags($request->description), 200, '...');

        $news->update($validateData);

        return redirect('admin/news')->with('success', 'News berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $newsTitle = $news->title;

        $news->delete($news->id);

        return redirect('admin/news')->with('danger', $newsTitle. ' berhasil diubah');
    }
}

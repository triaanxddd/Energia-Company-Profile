<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\About;
use App\Models\Company;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Sertificate;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $about = About::latest()->first();
        $companies = Company::latest()->paginate(6);
        $sertificates = Sertificate::latest()->paginate(3);
        $services = Service::latest()->get();

        $newses = News::latest()->take(3)->get();
        // views($about)->record();

        return view('index', compact('about', 'newses', 'companies', 'sertificates', 'services'));
    }

    public function portfolio(){
        $portfolios = Portfolio::latest()->get();

        return view('portfolio.index', compact('portfolios'));
    }

    public function news(Request $request){
        $latestNewses = News::latest()->take(2)->get();
        $search_name = $request->search_name;

        $allNews = News::when($search_name, function($q) use($search_name){
            $q->where("title","like","%".$search_name."%");
        })->latest()->paginate(10);

        return view('news.index', compact('latestNewses', 'allNews'));
    }

    public function newsDetail($id){
        $newsDetail = News::with('user')->where('id', $id)->first();

        return view('news.news-detail', compact('newsDetail'));
    }

    public function jobVacancy(){
        return view('vacancy.vacancy');

    }

}

<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\News;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Sertificate;
use Illuminate\Http\Request;
use CyrildeWit\EloquentViewable\View;

class DashboardController extends Controller
{
    
    public function index(Request $request){
        $services = Service::count();
        $sertificates = Sertificate::count();
        $companies = Company::count();
        $portfolios = Portfolio::count();
        $news = News::count();
        $contacts = Contact::count();

        $views = View::all();
        $listX = [];

        //filter variables
        $filterBy = $request->filter_by;
        $searchYear = $request->search_year;

        //Filter
        $currentYear = Carbon::now()->format('Y'); // Get the current year
        $listYear =  $views->map(function ($view) {
            $viewedAt = Carbon::parse($view->viewed_at);
            return $viewedAt->format('Y');
        })->unique()->values()->toArray();
        sort($listYear);
        
        //month filter
        if($filterBy == 'month'){
            $listMonth = $views->filter(function ($view) use ($searchYear) {
                $viewedAt = Carbon::parse($view->viewed_at);
                return $viewedAt->format('Y') === $searchYear;
            })->map(function ($view) {
                $viewedAt = Carbon::parse($view->viewed_at);
                return $viewedAt->format('F'); // 'F' returns the full month name
            })->unique()->values()->toArray();
        
            // Sort the list in ascending order
            sort($listMonth);
            // Count views for each month and store in an array
            $viewCounts = [];
            foreach ($listMonth as $month) {
                $viewCounts[$month] = $views->filter(function ($view) use ($month, $searchYear) {
                    $viewedAt = Carbon::parse($view->viewed_at);
                    return $viewedAt->format('F') === $month && $viewedAt->format('Y') === $searchYear;
                })->count();
            }
            $listX = $listMonth;
        }

        //year filter
        else{
            // Count views for each year and store in an array
            $viewCounts = [];
            foreach ($listYear as $year) {
                $viewCounts[$year] = $views->filter(function ($view) use ($year) {
                    $viewedAt = Carbon::parse($view->viewed_at);
                    return $viewedAt->format('Y') === $year;
                })->count();
            }

            $listX = $listYear;
        }

        return view("admin.index", compact('services', 'sertificates', 'companies', 'portfolios', 'news', 'contacts', 'views', "listX", "viewCounts", "listYear"));

    }

}

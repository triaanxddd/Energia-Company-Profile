<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactSendController;
use App\Http\Controllers\Guest\GuestAboutController;
use App\Http\Controllers\Guest\GuestNewsController;
use App\Http\Controllers\Guest\GuestSertificatesController;
use App\Http\Controllers\Guest\GuestServicesController;
use App\Http\Controllers\SertificateController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//home
Route::get('/', [MainController::class, 'index'])->name('home');

//gallery or portfolio
Route::get('/portfolio', [MainController::class, 'portfolio'])->name('portfolio');

//news
Route::get('/news', [MainController::class, 'news'])->name('news');
Route::get('/news-detail/{id}', [MainController::class, 'newsDetail'])->name('news-detail');

//vacancy
Route::get('/job-vacancy', [MainController::class, 'jobVacancy'])->name('job-vacancy');

//login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('sign-in');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/contacts', [ContactSendController::class,'send'])->name('contactSend');

//admin pages
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/about', AboutController::class);
    Route::resource('/company', CompanyController::class);
    Route::resource('/sertificate', SertificateController::class);
    Route::resource('/portfolios', PortfolioController::class);
    Route::resource('/news', NewsController::class);
    Route::resource('/services', ServiceController::class);
    Route::resource('/contacts', ContactController::class);

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile-admin');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile-edit');
});

//about page
Route::get('/about', GuestAboutController::class)->name('about');

//services page
Route::get('/services',[GuestServicesController::class, 'index'])->name('services');

//sertificates page
Route::get('/sertificates', GuestSertificatesController::class)->name('sertificates');

Route::get('/services/{id}', [GuestServicesController::class, 'view'])->name('service-view');

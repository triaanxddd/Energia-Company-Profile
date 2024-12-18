<?php

namespace App\Http\Controllers\Guest;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GuestAboutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $about = About::latest()->first();

        return view('guest.about', compact('about'));
    }
}

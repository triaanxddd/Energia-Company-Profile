<?php

namespace App\Http\Controllers\Guest;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GuestServicesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $services = Service::latest()->get();

        return view('guest.services', compact('services'));

    }

    public function view($id){
        $service = Service::findOrFail($id);

        return view('guest.services.view', compact('service'));
    }
}

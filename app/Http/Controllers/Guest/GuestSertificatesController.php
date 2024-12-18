<?php

namespace App\Http\Controllers\Guest;

use App\Models\Company;
use App\Models\Sertificate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GuestSertificatesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $sertificates = Sertificate::latest()->get();
        $companies = Company::latest()->get();

        return view('guest.sertificates', compact('sertificates', 'companies'));
    }
}

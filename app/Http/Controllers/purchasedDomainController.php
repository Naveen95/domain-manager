<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\domain_details;

class purchasedDomainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $domain_details = domain_details::
        where('user_id',\Auth::user()->id)
        ->get();
        //var_dump($domain_details);
        return view('purchased_domains')->with('domain_details' , $domain_details);
        
}
}

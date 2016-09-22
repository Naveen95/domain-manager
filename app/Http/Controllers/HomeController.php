<?php

namespace App\Http\Controllers;
use App\domain_details;

use App\Http\Requests;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
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
    public function index()
    {

        $week = Carbon::now()->addWeek();
        $now = Carbon::now();
        
        $domain_count = domain_details::
        where('user_id',\Auth::user()->id)
        ->get()->count();
        $domain_alert = domain_details::
        where('user_id',\Auth::user()->id)
        ->where("domain_ex_date","<", $week)
    ->where("domain_ex_date", ">" ,$now)
    ->get();

        
        



       $domain_alert_count = count($domain_alert);

       



        return view('home1')->with('domain_count' , $domain_count)
        ->with('domain_alert_count' , $domain_alert_count);
    }
}

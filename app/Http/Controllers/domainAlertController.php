<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\domain_details;

use Carbon\Carbon;

class domainAlertController extends Controller
{
    public function index()
    {

    	$week = Carbon::now()->addWeek();
        $now = Carbon::now();
        
        $domain_count = domain_details::get()->count();
        $domain_alert = domain_details::
        where("domain_ex_date","<", $week)
    ->where("domain_ex_date", ">" ,$now)
    ->get();

    return view('domain_alert')->with('domain_alert_details',$domain_alert);

    }
}

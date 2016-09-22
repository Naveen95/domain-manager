<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\domain_details;
use Carbon\Carbon;

use App\Http\Requests;

class recentPurchaseController extends Controller
{

	public function index()
	{

		$now = Carbon::now();

    $domain_details = new domain_details();
    $recent_purchase = $domain_details::
     where('user_id',\Auth::user()->id)
    ->where('domain_p_date','<',$now)
    ->orderBy('domain_p_date','DESC')
    ->take(3)
    ->get();

    return view('recent_purchase')->with('recent_purchase',$recent_purchase);


}


}

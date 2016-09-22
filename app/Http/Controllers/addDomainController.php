<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\domain_details;
use Carbon\Carbon;

class addDomainController extends Controller
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
    public function save(Request $request)
    {
        $post = $request->all();
        $val = \Validator::make($request->all(),
            [
                'client_name' => 'required',
                'domain_name' => 'required',
                'domain_p_date' => 'required',
                'domain_reg' => 'required',
                'domain_ex_date' => 'required',
                'domain_acc_email' => 'required',
                'domain_acc_pass' => 'required',

            ]);

            if ($val->fails()) {
                
                return redirect()->back()->withErrors($val->errors());
            }

            else {

                $data = array(

                    'client_id' => $post['client_id'],
                    'client_name' => $post['client_name'],
                    'client_business' => $post['client_business'],
                    'client_ref' => $post['client_ref'],
                    'gmail_mail' =>  $post['gmail_mail'],
                    'gmail_pass'=> $post['gmail_pass'],
                    'client_dob'=> $post['client_dob'],
                    'client_addr'=> $post['client_addr'],
                    'client_no1'=> $post['client_no1'],
                    'user_id' => \Auth::user()->id,
                    'domain_name' => $post['domain_name'],
                    'domain_p_date' => $post['domain_p_date'],

                    'domain_reg' => $post['domain_reg'],
                    'domain_ex_date' => Carbon::createFromFormat('d-m-Y', $post['domain_ex_date']),
                    'domain_acc_email' => $post['domain_acc_email'],
                    'domain_acc_pass' => $post['domain_acc_pass'],

                    );

                //var_dump($data);

               $update_data = domain_details::insert($data);

                    if ($update_data) {
                        
                        return redirect('/home1');
                    }
                    else
                    {

                        return redirect()->back()->withErrors($val->errors());
                    }



            }
        
    }
}

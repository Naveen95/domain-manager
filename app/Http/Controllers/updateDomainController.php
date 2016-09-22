<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\domain_details;
use Carbon\Carbon;

use App\Http\Requests;

class updateDomainController extends Controller
{

	public function index()
	{

	    $domain_details = domain_details::
         where('user_id',\Auth::user()->id)
         ->get();
        return view('update_domain')->with('domain_details' , $domain_details);
	}

    public function showDeleteDomain()
    {

        $domain_details = domain_details::get();
        return view('delete_domain')->with('domain_details' , $domain_details);
    }

    public function deleteDomain($domain_id)
    {
        $domain = domain_details::where('domain_id',$domain_id)->first();
        $domain->delete();
        $domain_details = domain_details::get();
        return redirect()->route('show.delete.domain');


    }

	public function updateDomain(Request $request)
	{

		$post = $request->all();
		$val = \Validator::make($request->all(), [

				'client_id' => 'required',
				'client_name' => 'required',
				'client_business' => 'required',
				'client_ref' => 'required',
				'gmail_mail' => 'required',
				'gmail_pass' => 'required',
				'client_dob' => 'required',
				'client_addr' => 'required',
				'client_no1' => 'required',
				'client_ref' => 'required',
				'domain_name' => 'required',
		        'domain_p_date' => 'required',
		        'domain_reg' => 'required',
		        'domain_ex_date' => 'required',
		        'domain_acc_email' => 'required',
		        'domain_acc_pass' =>  'required',
		        'domain_id' => 'required',

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
                    
                    'domain_name' => $post['domain_name'],
                    'domain_p_date' => $post['domain_p_date'],

                    'domain_reg' => $post['domain_reg'],
                    'domain_ex_date' => $post['domain_ex_date'],
                    'domain_acc_email' => $post['domain_acc_email'],
                    'domain_acc_pass' => $post['domain_acc_pass'],
                    'domain_id' => $post['domain_id'],

                    );

                //var_dump($data);

               $update_data = domain_details::where('domain_id', $post['domain_id'])
               ->update($data);

                    if ($update_data) {

                        $new_data = domain_details::where('domain_id',$post['domain_id'])->first();
                        
                        return response()->json( ['client_id'=> $new_data['client_id'] , 'client_name' => $new_data['client_name'],
                            'client_business'=> $new_data['client_business'], 'client_ref'=> $new_data['client_ref'], 
                            'gmail_mail'=> $new_data['gmail_mail'], 'gmail_pass'=> $new_data['gmail_pass'], 'client_dob'=> $new_data['client_dob'],
                            'client_addr'=> $new_data['client_addr'],'client_no1'=> $new_data['client_no1'], 'domain_name'=> $new_data['domain_name'],
                            'domain_p_date'=> $new_data['domain_p_date'], 'domain_reg'=> $new_data['domain_reg'], 'domain_ex_date'=> $new_data['domain_ex_date'],
                            'domain_acc_email'=> $new_data['domain_acc_email'],'domain_acc_pass'=> $new_data['domain_acc_pass']],200);
                    }
                    else
                    {

                        return redirect()->back()->withErrors($val->errors());
                    }



            }


	}
    
}

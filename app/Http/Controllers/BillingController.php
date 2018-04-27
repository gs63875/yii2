<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Billing;

class BillingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('auth', ['only' => ['show']]);
    }
   public function show(Request $request) 
   {
	$user = $request->user('api');
   

	$response = Billing::where('customerID',  $user->customerID)->get();
	return response()->json($response, 200);
   }
    //
}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
class LoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
   public function login(Request $request)
 
   {

       $this->validate($request, [
 
       'phone' => 'required',
 
       'password' => 'required'
 
        ]);
	
     // $user = Users::where('email', $request->input('email'))->first();
	 
		$user =User::where('phone', $request->input('phone'))->where('password',$request->input('password'))->first();
		 if(!empty($user)){ 
		 
			return response()->json(['status' => 'success','data'=>$user],20);
	
		//User::where('phone','91-9988030541')->where('password','57Ebil')->first()
    
      
     }else{ 
        return response()->json(['status' => 'fail'],401); 
    }
 
   }
    //
}

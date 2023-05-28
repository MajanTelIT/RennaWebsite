<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Validator,Hash,Redirect,DB;

class LoginController extends Controller
{
   public function validateLogin(Request $request)
    {
    	$validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required|min:8|max:16'
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try{          
           //print_r($request->password);exit;

            if(auth()->attempt(['email'=>$request->email,'password'=>$request->password]))
            {  
                $profile_info =  Auth::user();
                //print_r($profile_info);exit;

                if($profile_info->status != '1'){
                    auth()->logout();
            
                    return back()->withErrors(['error' => ["Your account has been revoked by admin."]]);
                }
                if($profile_info->is_deleted == 1){
                
                    auth()->logout();

                    return back()->withErrors(['error' => ["These credentials does not match our records."]]);
                }
                if($request->has('remember'))
                {
                    $hour = time() + 3600 * 24 * 30;
                    Cookie::queue('email',$request->email, $hour);
                    Cookie::queue('password',$request->password, $hour);
                    Cookie::queue('remember',1, $hour);
                }

                return redirect('/admin/dashboard');
            
            } else {
               // return redirect('/dashboard');

                  return back()->withErrors(['error' => ["These credentials does not match our records."]]);
            }
        } catch (Exception $e) {

            return redirect()->back()->withErrors($e->getMessage().' on line '.$e->getLine());
        }
    }

    public function passwordReset(){

         return view('auth.register');
    }
}

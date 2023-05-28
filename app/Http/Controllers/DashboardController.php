<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\custom_helper;
use App\StaticPages;
use App\User;
use App\Customer;
use App\Banner;
use Response;

class DashboardController extends Controller
{
    public function dashboard()
    {	
        $usersCount=User::where('status','=','1')->count();
        $StaticPageCount=StaticPages::where('status','=','1')->count();
        $BannerCount=Banner::where('status','=','1')->count();

        return view('admin.dashboard', ['usersCount' => $usersCount,'StaticPageCount' => $StaticPageCount,'BannerCount' => $BannerCount]);
    }
    

    public function lockScreen(){


         // only if user is logged in
        if ( time() - Session::get('last_activity') >= 10 ) {
            return redirect('lockscreen');
        }

        return redirect('/login');
        

    }


     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('admin.contact');
    }


     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function coverage()
    {
        return view('admin.coverage');
    }


     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function roaming()
    {
        return view('admin.roaming');
    }
}


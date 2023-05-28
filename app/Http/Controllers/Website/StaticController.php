<?php

namespace App\Http\Controllers\website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Banner;
use Response;

class StaticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Request::segment(2)=='en') {
            $banner = StaticPages::where('status','1')->where('language','1')->orderBy('order', 'ASC')->get();
        }else{
            $banner = StaticPages::where('status','1')->where('language','2')->orderBy('order', 'ASC')->get();
        }
        
        return view('website.home', ['banner' => $banner]);
    }
}

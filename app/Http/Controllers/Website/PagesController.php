<?php

namespace App\Http\Controllers\Website;

use Request;
use App\Http\Controllers\Controller;
use App\Banner;
use App\StaticPages;
use Response;


class PagesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($lang,$id)
    {

        if ($lang=='en') {
            $pages = StaticPages::where('id',$id)->where('status','1')->first();

            $banner = Banner::where('status','1')->where('language','1')->orderBy('order', 'ASC')->get();
        }else{
            $pages = StaticPages::where('id',$id)->where('status','1')->first();

            $banner = Banner::where('status','1')->where('language','2')->orderBy('order', 'ASC')->get();
        }
        
        return view('website.pages.index', ['pages' => $pages,'banner' => $banner]);
    }
}

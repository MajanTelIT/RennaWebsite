<?php

namespace App\Http\Controllers\website;

use Request;
use App\Http\Controllers\Controller;
use App\Banner;
use Response;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('website.home');
    }

     public function home1()
    {
        $banner = Banner::orderBy('updated_at', 'DESC')->get();

        return view('website.home1', ['banner' => $banner]);
    }
}

<?php

namespace App\Http\Controllers\Website;

use Request;
use App\Http\Controllers\Controller;
use App\Banner;
use App\StaticPages;
use Response;
use Illuminate\Support\Facades\DB;



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

	public function DataBundles()
    {	
        $results = DB::select('select * from static_pages where id = ?', [1]);
		//print_r($results[0]);exit;
        return view('website.data-bundles', ['results' => $results[0]]);
    }

	public function IndiaBundles()
    {	
        $results = DB::select('select * from static_pages where id = ?', [2]);
		//print_r($results[0]);exit;
        return view('website.india-bundles', ['results' => $results[0]]);
    }
}

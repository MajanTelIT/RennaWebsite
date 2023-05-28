<?php

namespace App\Http\Controllers\website;


use Request;
static $current_lang;
use App\Http\Controllers\Controller;

class LanguageController extends Controller
{
   public function index(Request $request){
        if($request->lang <> ''){
            app()->setLocale($request->lang);
        }
        echo trans('language.Sodexo');
    }

   public function switchLang($language) {


        
        $current_lang = Request::segment(4);

       // print_r($language);
       // print_r($current_lang);exit;
 
        
        switch ($language) {
            case 'en':
            
                return redirect(str_replace('/'.$language.'/', '/'.$current_lang.'/',$_SERVER['HTTP_REFERER']));
                break;
            case 'ar':

                return redirect(str_replace('/'.$language.'/', '/'.$current_lang.'/',$_SERVER['HTTP_REFERER']));
                break;

            default:
                break;
        } 
    }
}

<?php

namespace App\Http\Controllers\website;

use Auth;
use App\User;
use Request;
use App\Language;
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

    function switchLang($language) {
         // 
    	$current_lang = Request::segment(3);
 
        
        switch ($language) {
        	case 'en':
            
                return redirect(str_replace('/'.$language.'/', '/'.$current_lang.'/',$_SERVER['HTTP_REFERER']));
                break;
            case 'vn':

                return redirect(str_replace('/'.$language.'/', '/'.$current_lang.'/',$_SERVER['HTTP_REFERER']));
                break;
            case 'ph':
                return redirect(str_replace('/'.$language.'/', '/'.$current_lang.'/',$_SERVER['HTTP_REFERER']));
                break;

        	default:
        		break;
        } 
    }
}

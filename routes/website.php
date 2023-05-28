<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    Route::group([
        'prefix' => '/'.'{locale}',
        'where' => ['locale' => '[a-zA-Z]{2}'],
        'middleware' => 'setlocale',
        ], function(){

            Auth::routes();
              
            Route::get('/home',                                 'website\BannerController@index')->name('getBanner');
            // Language Controller'
            Route::get('/localization/{lang}',                  'website\LanguageController@index');
            Route::get('/languageSwitch/{lang}',                'website\LanguageController@switchLang');
                        
    });





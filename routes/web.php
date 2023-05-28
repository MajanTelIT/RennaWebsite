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


//print_r($lang);exit();

Route::group([], function()
{
    $lang=Request::segment(1);
    if ($lang=='admin' ) // use Auth::check instead of Auth::user
    {
        Route::get('/admin/login', function () {
            return view('auth.login');
        });
        Auth::routes();

        Route::group([
                'prefix' => '/admin/',
                //'where' => ['locale' => '[a-zA-Z]{2}'],
                //'middleware' => 'setlocale',
                ], function(){

            Route::post('/validate/Login',                      'LoginController@validateLogin');        
            //Banner Controller
            Route::get('/banners/list',                         'BannerController@index')->name('bannersList');
            Route::get('/add/banners',                          'BannerController@create')->name('createBanner');
            Route::get('/edit/banner/{id}',                     'BannerController@edit')->name('editBanner');
            Route::post('/update/banner/{id}',                  'BannerController@update')->name('updateBanner');
            Route::post('/store/banner',                        'BannerController@store')->name('storeBanner');
            Route::post('/logout',                              'HomeController@logout')->name('logout');
            Route::post('/block/banner/{id}',                    'BannerController@blockBanner')->name('blockBanner');
            Route::post('/unblock/banner/{id}',                  'BannerController@unblockBanner')->name('unblockBanner');

            //Static Controller
            Route::get('/static/pages/list',                    'StaticController@index')->name('staticList');
            Route::get('/add/static/pages',                     'StaticController@create')->name('createStaticPage');
            Route::post('/store/static/pages',                  'StaticController@store')->name('storeStaticPage');
            Route::get('/edit/static/pages/{id}',               'StaticController@edit')->name('editStaticPage');
            Route::post('/update/static/pages/{id}',            'StaticController@update')->name('updateStaticPage');
            Route::post('/block/static/page/{id}',              'StaticController@blockStatic')->name('blockStatic');
            Route::post('/unblock/static/page/{id}',            'StaticController@unblockStatic')->name('unblockStatic');
           
             //Dashboard Controller
            Route::get('/dashboard',                            'DashboardController@dashboard')->name('dashboard');
            Route::get('/coverage',                             'DashboardController@coverage')->name('coverage');
            Route::get('/roaming',                              'DashboardController@roaming')->name('roaming');
            Route::get('/lockScreen',                           'DashboardController@lockScreen')->name('lockScreen');

            //Customer Controller
            Route::get('/write-to-us',                          'CustomerController@index')->name('writeToUs');
            Route::get('/view/customer/request/{id}',           'CustomerController@show')->name('CustomerRequest');
            Route::post('/delete/customer/request/{id}',        'CustomerController@delete')->name('CustomerDelete');

            //Customer Controller
            Route::get('/contact/{id}',                         'ContactController@view')->name('contact');
            Route::post('/update/contact/us/{id}',              'ContactController@update')->name('updateContactUs');

            //Services Controller
            Route::get('/badar-al-sama',                        'ServicesController@badarAlSama')->name('badarAlSama');
            Route::get('/favourite-number',                     'ServicesController@favouriteNumber')->name('favouriteNumber');
            Route::get('/international-calling',                'ServicesController@internationalCalling')->name('internationalCalling');
            Route::get('/international-roaming',                'ServicesController@internationalRoaming')->name('internationalRoaming');
            Route::get('/international-credit-transfer',        'ServicesController@internationalCreditTranfer')->name('internationalCreditTranfer');
            Route::get('/mobile-porting',                       'ServicesController@mobilePorting')->name('mobilePorting');
            Route::get('/national-calling-bundle',              'ServicesController@nationalCallingBundle')->name('nationalCallingBundle');
            Route::get('/pke',                                  'ServicesController@pke')->name('pke');
            Route::get('/data-bundles',                         'ServicesController@dataBundles')->name('dataBundles');
            Route::get('/renna-roaming',                        'ServicesController@rennaRoaming')->name('rennaRoaming');
            Route::get('/vas',                                  'ServicesController@vas')->name('vas');
            Route::get('/voip',                                 'ServicesController@voip')->name('voip');

            //Plans
            Route::get('/create-data-bundles-plans',            'PlanController@CreateDataBundles')->name('CreateDataBundles');
            Route::get('/data-bundles-list',                    'PlanController@dataBundlesList')->name('dataBundlesList');
            Route::get('/favourite-number-plans',               'PlanController@favouriteNumberPlans')->name('favouriteNumberPlans');
            Route::get('/favourite-number-create',              'PlanController@create')->name('favouriteNumberCreate');
            Route::get('/international-offers-list',            'PlanController@internationalOffersList')->name('internationalOffersList');
            Route::get('/create-international-offers',           'PlanController@CreateInternationalOffers')->name('CreateInternationalOffers');

            //users
            Route::get('/user/list',                            'UserController@userList')->name('userList');
            Route::get('/create/user',                          'UserController@CreateUser')->name('CreateUser');
            Route::post('/store/user',                          'UserController@storeUser')->name('storeUser');
            Route::get('/edit/user/{id}',                       'UserController@editUser')->name('editUser');
            Route::post('/update/user/{id}',                    'UserController@updateUser')->name('updateUser');
            Route::get('/user/profile',                         'UserController@userProfile')->name('userProfile');
            Route::get('/forgot-password',                      'LoginController@passwordReset');

            Route::post('/logout',                              'HomeController@logout')->name('logout');
            
        });
       
    } else{

        Route::group([
        'prefix' => '/website/'.'{locale}',
        'where' => ['locale' => '[a-zA-Z]{2}'],
        'middleware' => 'setlocale',
        ], function(){

            Auth::routes();
              
            Route::get('/home',                                 'website\BannerController@index')->name('getBanner');
            Route::get('/home1',                                'website\BannerController@home1')->name('home1');
            // Language Controller'
            Route::get('/localization/{lang}',                  'website\LanguageController@index');
            Route::get('/languageSwitch/{lang}',                'website\LanguageController@switchLang'); 
            Route::get('/pages/{id}',                           'website\PagesController@index')->name('getPage');
            Route::get('/data/bundles',                         'website\PagesController@DataBundles')->name('DataBundles'); 
			Route::get('/india/bundles',                         'website\PagesController@IndiaBundles')->name('IndiaBundles');     
    });
    }
});




    

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

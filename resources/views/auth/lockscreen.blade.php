<?php
 $seg = Request::segment(1); 
 ?>
 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>{{ __('Log In | Majan telecommunications') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/favicon.ico') }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('assets/favicon.ico') }}" type="image/x-icon">

        <!-- App css -->
        <link href="{{ asset('assets/css/bootstrap-purple.min.css') }}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
        <link href="{{ asset('assets/css/app-purple.min.css') }}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

        <link href="{{ asset('assets/css/bootstrap-purple-dark.min.css') }}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
        <link href="{{ asset('assets/css/app-purple-dark.min.css') }}" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

        <!-- icons -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <body class="loading authentication-bg authentication-bg-pattern" dir="{{(App::isLocale('ar') ? 'rtl' : 'ltr')}}">
        

        <div class="account-pages mt-5 mb-5">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">
                                
                                <div class="text-center mb-4">
                                    <div class="auth-logo">
                                        <a href="index.html" class="logo logo-dark text-center">
                                            <span class="logo-lg">
                                                <img src="{{ asset('assets/images/renna-logo.png') }}" alt="" height="22">
                                            </span>
                                        </a>
                    
                                        <a href="index.html" class="logo logo-light text-center">
                                            <span class="logo-lg">
                                                <img src="{{ asset('assets/images/renna-logo.png') }}" alt="" height="22">
                                            </span>
                                        </a>
                                    </div>
                                </div>

                                <div class="text-center w-75 m-auto">
                                    <img src="{{ asset('assets/images/user-male.png') }}" height="88" alt="user-image" class="rounded-circle shadow">
                                    <h4 class="text-dark-50 text-center mt-3 font-16">Hi ! Geneva </h4>
                                    <p class="text-muted mb-4">Enter your password to access the Panel.</p>
                                </div>


                                <form action="#">

                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" type="submit"> Log In </button>
                                    </div>

                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
            © 2014. <script>document.write(new Date().getFullYear())</script> &copy; {{ __('Majan Telecommunication L.L.C') }} <a href="" class="text-white-50">{{ __('Renna Mobile') }}</a> 
        </footer>

        <!-- Vendor js -->
        <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/app.min.js') }}"></script>

        <script src="{{ asset('assets/js/validation.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.validate.min.js')}}"></script>
        <script src="{{ asset('assets/js/additional-methods.min.js')}}"></script>
        <script src="{{ asset('assets/js/additional-methods.extends.js')}}"></script>

        
    </body>
    </html>
<!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu float-right mb-0">

    
                        <li class="dropdown d-inline-block d-lg-none">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fe-search noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-lg dropdown-menu-right p-0">
                                <form class="p-3">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                </form>
                            </div>
                        </li>
    
                        <li class="dropdown d-none d-lg-inline-block">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen" href="#">
                                <i class="fe-maximize noti-icon"></i>
                            </a>
                        </li>
    
                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="{{ asset('assets/images/users/user-1.jpg') }}" alt="user-image" class="rounded-circle">
                                
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome ! {{ Auth::user()->name }}</h6>
                                </div>
    
                                <!-- item-->
                                <a href="{{ route('userProfile')  }}" class="dropdown-item notify-item">
                                    <i class="fe-user"></i>
                                    <span>My Account</span>
                                </a>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-settings"></i>
                                    <span>Settings</span>
                                </a>
    
                                <!-- item-->
                                <a href="{{ route('lockScreen')  }}" class="dropdown-item notify-item">
                                    <i class="fe-lock"></i>
                                    <span>Lock Screen</span>
                                </a>
    
                                <div class="dropdown-divider"></div>
    
                                <!-- item-->
             
                                <a href="{{ route('logout')  }}" class="dropdown-item notify-item"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><i class="fe-log-out"></i>
                                    <span>Logout</span>
                                    <form id="logout-form" action="{{ route('logout')  }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </a>
                            </div>
                        </li>
    
                
                    </ul>
    
                    <!-- LOGO -->
                    <div class="logo-box">
    
    
                        <a href="{{ route('userList') }}" class="logo logo-light text-center">
                            <span class="logo-sm">
                                <img src="{{ asset('assets/images/renna-logo.png') }}" alt="" height="46">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('assets/images/renna-logo.png') }}" alt="" height="46">
                            </span>
                        </a>
                    </div>
    
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end Topbar -->
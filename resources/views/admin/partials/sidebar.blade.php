<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <div class="user-box text-center">
            <img src="{{ asset('assets/images/users/user-1.jpg') }}" alt="user-img" title="Mat Helme"
                class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                    data-toggle="dropdown">Geneva Kennedy</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user mr-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings mr-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock mr-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out mr-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>
            <p class="text-muted">Admin Head</p>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigation</li>
    
                <!-- <li>
                    <a href="#sidebarDashboards" data-toggle="collapse" >
                         <a href="{{ route('userList')  }}" data-toggle="collapse" >
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="badge badge-info badge-pill float-right">4</span>
                        <span> Dashboards </span>
                    </a>
                    <div class="collapse" id="sidebarDashboards">
                        <ul class="nav-second-level">
                            <li>
                                <a href="index.html">Dashboard 1</a>
                            </li>
                            <li>
                                <a href="dashboard-2.html">Dashboard 2</a>
                            </li>
                            <li>
                                <a href="dashboard-3.html">Dashboard 3</a>
                            </li>
                            <li>
                                <a href="dashboard-4.html">Dashboard 4</a>
                            </li>
                        </ul>
                    </div>
                </li> -->
                <li>
                    <a href="{{ route('dashboard')  }}">
                        <span class="badge badge-primary float-right">Hot</span>
                        <i class="mdi mdi-table"></i>
                        <span> Dashboard </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('userList')  }}">
                        <span class="badge badge-primary float-right">Hot</span>
                        <i class="mdi mdi-rss"></i>
                        <span> Users </span>
                    </a>
                </li>
                <li class="menu-title mt-2">Website</li>
                <li>
                    <a href="{{ route('bannersList')  }}">
                        <span class="badge badge-primary float-right">Hot</span>
                        <i class="mdi mdi-rss"></i>
                        <span> Banners </span>
                    </a>
                </li>
         
                <!-- <li>
                    <a href="#sidebarCrm" data-toggle="collapse">
                        <i class="mdi mdi-account-multiple-outline"></i>
                        <span> Plans </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarCrm">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('favouriteNumberPlans')  }}">Favorite Numbers</a>
                            </li>
                            <li>
                                <a href="{{ route('dataBundlesList')  }}">Data Bundles</a>
                            </li>
                            <li>
                                <a href="{{ route('internationalOffersList')  }}">International Offers</a>
                            </li>
                    
                        </ul>
                    </div>
                </li> -->

                <!-- <li>
                    <a href="#sidebarEcommerce" data-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span> Services </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEcommerce">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ url('vas')  }}">Value Added Services</a>
                            </li>
                            <li>
                                <a href="{{ url('international-roaming')  }}">International Roaming</a>
                            </li>
                            <li>
                                <a href="{{ url('favourite-number')  }}">Favorite Numbers</a>
                            </li>
                            <li>
                                <a href="{{ url('national-calling-bundle')  }}">National Calling</a>
                            </li>
                            <li>
                                <a href="{{ url('data-bundles')  }}">Data Bundles</a>
                            </li>
                            <li>
                                <a href="{{ url('international-calling')  }}">International Calling</a>
                            </li>
                            <li>
                                <a href="{{ url('international-credit-transfer')  }}">International Credit Transfer</a>
                            </li>
                            <li>
                                <a href="{{ url('voip')  }}">VOIP – Renna Talk</a>
                            </li>
                    
                            <li>
                                <a href="{{ url('mobile-porting')  }}">Mobile Porting</a>
                            </li>
                            <li>
                                <a href="{{ url('badar-al-sama')  }}">Badr Al Samaa Promotion</a>
                            </li>
                            <li>
                                <a href="{{ url('pke')  }}">Purushottam Kanji Exchange promotion</a>
                            </li>
                        </ul>
                    </div>
                </li>



                <li>
                    <a href="{{ url('coverage')  }}">
                        <span class="badge badge-primary float-right">Hot</span>
                        <i class="mdi mdi-rss"></i>
                        <span> Coverage </span>
                    </a>
                </li> -->

                <li>
                    <a href="{{ route('staticList')  }}">
                        <span class="badge badge-primary float-right">Hot</span>
                        <i class="mdi mdi-rss"></i>
                        <span> Static Pages </span>
                    </a>
                </li>

                <!-- <li>
                    <a href="{{ url('roaming')  }}">
                        <i class="mdi mdi-domain"></i>
                        <span> Roaming </span>
                    </a>
                </li> -->


                <li>
                    <a href="{{ url('admin/contact/1')  }}">
                        <i class="mdi mdi-folder-star-outline"></i>
                        <span> Contact Us</span>
                    </a>
                </li>

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
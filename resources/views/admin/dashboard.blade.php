@extends('admin.layouts.master')

@section('content')

<!-- Start Page Content here -->
            <!-- ============================================================== -->

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class="row">
                <div class="col-lg-6 col-xl-3">
                    <div class="card-box bg-pattern">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-md bg-blue rounded">
                                    <i class="fe-layers avatar-title font-22 text-white"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <h3 class="text-dark my-1"><span data-plugin="counterup">{{ $usersCount }}</span></h3>
                                    <p class="text-muted mb-0 text-truncate">Active Users</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card-box-->
                </div> <!-- end col -->

                <div class="col-lg-6 col-xl-3">
                    <div class="card-box bg-pattern">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-md bg-success rounded">
                                    <i class="fe-award avatar-title font-22 text-white"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <h3 class="text-dark my-1"><span data-plugin="counterup">{{ $usersCount }}</span></h3>
                                    <p class="text-muted mb-0 text-truncate">Active Pages</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card-box-->
                </div> <!-- end col -->
                <div class="col-lg-6 col-xl-3">
                    <div class="card-box bg-pattern">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-md bg-danger rounded">
                                    <i class="fe-delete avatar-title font-22 text-white"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <h3 class="text-dark my-1"><span data-plugin="counterup">{{ $BannerCount }}</span></h3>
                                    <p class="text-muted mb-0 text-truncate">Total Active Banners</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card-box-->
                </div> <!-- end col -->
                <div class="col-lg-6 col-xl-3">
                    <div class="card-box bg-pattern">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-md bg-warning rounded">
                                    <i class="fe-dollar-sign avatar-title font-22 text-white"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <h3 class="text-dark my-1"><span data-plugin="counterup"></span></h3>
                                    <p class="text-muted mb-0 text-truncate">Total Messages</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card-box-->
                </div> <!-- end col -->
            </div>
            <!-- end row-->
            
        </div> <!-- container -->

    </div> <!-- content -->
</div>

@endsection
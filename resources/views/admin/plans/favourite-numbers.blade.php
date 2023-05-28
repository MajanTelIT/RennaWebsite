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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Renna</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Favourite number list</a></li>
                                            <li class="breadcrumb-item active">Create list</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Create Favourite number list</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label for="projectname">Enter Name</label>
                                                    <input type="text" id="projectname" class="form-control" placeholder="Favourite number list">
                                                </div>

                                                <div class="form-group">
                                                    <label for="projectname">Enter details</label>
                                                    <input type="text" id="projectname" class="form-control" placeholder="Favourite number list">
                                                </div>

                                                <div class="form-group">
                                                    <label for="project-overview">Enter Overview</label>
                                                    <textarea class="form-control" id="project-overview" rows="5" placeholder="Enter some brief about project..">Call your family and friends abroad and receive 15% DISCOUNT!

Select 3 International Favorite Numbers of your choice
Simply dial *181*62# from your Renna Mobile to configure your numbers
The numbers can be in any country and be both mobile or fixed telephone numbers!
The numbers can be called at any time of the day
The service is available to all Renna Mobile customers, independent of Price Plan
In contrast to other similar offers in Oman, the Renna Favorite Numbers are available for FREE with no monthly subscription fee!
Free for the first time and change fee of 500 Bz per number apply
Please click the following links for more details on our very competitive International calling prices and fantastic offers for International calls.</textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label>Project Privacy</label> <br>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio1">Enable</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2">disable</label>
                                                    </div>
                                                </div>
                                            </div> <!-- end col-->

                                        </div>
                                        <!-- end row -->


                                        <div class="row mt-3">
                                            <div class="col-12 text-center">
                                                <button type="button" class="btn btn-success waves-effect waves-light m-1"><i class="fe-check-circle mr-1"></i> Create</button>
                                                <button type="button" class="btn btn-light waves-effect waves-light m-1"><i class="fe-x mr-1"></i> Cancel</button>
                                            </div>
                                        </div>

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->
                        
                    </div>

    </div> <!-- content -->
</div>

@endsection
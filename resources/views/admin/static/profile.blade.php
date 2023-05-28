@extends('admin.layouts.master')

@section('content')

<div class="content-page">
    <div class="content">
        <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Renna Mobile</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                                            <li class="breadcrumb-item active">Numbers List</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Welcome Al Raka llc</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-xl-8 col-lg-8">
                                <!-- project card -->
                                <div class="card d-block">
                                    <div class="card-body">

                                        <div class="float-right">
                                            <div class="form-row">
                                                <div class="col-auto">
                                                    <a href="number-list.html" class="btn btn-sm btn-link"><i class="mdi mdi-keyboard-backspace"></i> Back</a>
                                                </div>
                                                
                                            </div>
                                        </div> <!-- end dropdown-->

                                        <h4 class="mb-3 mt-0 font-17">Details of the <b>Al Raka llc</b></h4>
                                       
                                       <table class="table">
                                        <tbody><tr>
                                            <th>User Name</th>
                                            <td>7171XXXX</td>
                                        </tr>
                                        <tr>
                                            <th>Full Name</th>
                                            <td>Al Raka trading llc</td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>Active</td>
                                        </tr>
                                        <tr>
                                            <th>Created Date</th>
                                            <td>2019-11-03</td>
                                        </tr>
                                        <tr>
                                            <th>Last Updated Date</th>
                                            <td>2019-11-03 09:12:47</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>xyz@alraka.com</td>
                                        </tr>
                                        <tr>
                                            <th>Mobile Number</th>
                                            <td>88889999</td>
                                        </tr>
                                    
                                    </tbody></table>

                                    </div> <!-- end card-body-->
                                    
                                </div> <!-- end card-->

                                
                                <!-- end card-->
                            </div> <!-- end col -->

                           
                        </div>
                        <!-- end row -->
                        
                    </div>

    </div> <!-- content -->
</div>
@endsection
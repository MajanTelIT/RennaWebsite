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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">User</a></li>
                                <li class="breadcrumb-item active">Add User </li>
                            </ol>
                        </div>
                        <h4 class="page-title">Add User</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 


            <div class="row">
                <div class="col-lg-8">
                    
                      {{ csrf_field() }}     
                       @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="card">
                                    <div class="card-body">

                                        <!-- <h4 class="mb-3 header-title">Horizontal form</h4> -->

                                        <form action="{{ url('store/user')}}" method="post" name="adduser" id="adduser" enctype="multipart/form-data" class="form-horizontal form-label-left">
                                            @csrf
                                            <div class="form-group row mb-3">
                                                <label for="Username" class="col-3 col-form-label">Username</label>
                                                <div class="col-9">
                                                    <input type="text" id="username" name="username" class="form-control" placeholder="e.g : abc">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <label for="inputEmail3" class="col-3 col-form-label">Email</label>
                                                <div class="col-9">
                                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <label for="phonenumber" class="col-3 col-form-label">Phone Number</label>
                                                <div class="col-9">
                                                    <input type="text" id="phonenumber" name="phonenumber" class="form-control" placeholder="e.g : 987****">
                                                </div>
                                            </div>
                                            <!-- <div class="form-group row mb-3">
                                                <label for="inputPassword3" class="col-3 col-form-label">Password</label>
                                                <div class="col-9">
                                                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <label for="inputPassword5" class="col-3 col-form-label">Retype Password</label>
                                                <div class="col-9">
                                                    <input type="password" class="form-control" id="inputPassword5" placeholder="Retype Password">
                                                </div>
                                            </div> -->
                                            <div class="form-group row mb-3">
                                                <label for="inputPassword3" class="col-3 col-form-label">Role Name</label>
                                                <div class="col-9">
                                                    <select class="form-control" id="example-select" name="role_id">
                                                        <option value="1">Admin</option>
                                                        <option value="2">Marketing</option>
                                                        <option value="3">Sales</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group mb-0 justify-content-end row">
                                                <div class="col-9">
                                                    <input type="submit" name="submit" class="btn btn-info waves-effect waves-light"> 
                                                </div>
                                            </div>
                                        </form>

                                    </div>  
                                    <!-- end card-body -->
                                </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end row -->
                </div>
        </div> <!-- content -->
 </div>

@endsection
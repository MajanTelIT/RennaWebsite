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
                                <li class="breadcrumb-item active">Edit User </li>
                            </ol>
                        </div>
                        <h4 class="page-title">Edit User</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">

                            <form action="{{ url('update/user',$user->id)}}" method="post" name="edituser" id="edituser" enctype="multipart/form-data" class="form-horizontal form-label-left">
                            @csrf
        
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="form-group row mb-3">
                                <label for="Username" class="col-3 col-form-label">Username</label>
                                <div class="col-9">
                                    <input type="text" id="username" name="username" class="form-control" value="{{ $user->name }}">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="inputEmail3" class="col-3 col-form-label">Email</label>
                                <div class="col-9">
                                    <input type="email" class="form-control" id="inputEmail3"  name="email" value="{{ $user->email }}">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="phonenumber" class="col-3 col-form-label">Phone Number</label>
                                <div class="col-9">
                                    <input type="text" id="phonenumber" name="phonenumber" class="form-control" value="{{ $user->msisdn }}">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="inputPassword3" class="col-3 col-form-label">Password</label>
                                <div class="col-9">
                                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password" value="******">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="inputPassword5" class="col-3 col-form-label">Retype Password</label>
                                <div class="col-9">
                                    <input type="password" class="form-control" id="inputPassword5" placeholder="Retype Password" value="******">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="inputPassword5" class="col-3 col-form-label">Status</label>
                                    <div class="col-9">
                                        <div class="radio form-check-inline">
                                            <input type="radio" id="inlineRadio1" value="A" name="status" {{ ($user->status=="A")? "checked" : "" }}>
                                            <label for="inlineRadio1"> Active </label>
                                        </div>
                                        <div class="radio form-check-inline">
                                            <input type="radio" id="inlineRadio2" value="I" name="status" {{ ($user->status=="I")? "checked" : "" }}>
                                            <label for="inlineRadio2"> Inactive </label>
                                        </div>
                                    </div>    
                            </div>
                            <div class="form-group row mb-3">
                                <label for="inputPassword3" class="col-3 col-form-label">Role Name</label>
                                <div class="col-9">
                                    <select class="form-control" id="example-select" name="role_id">
                                        <option value="1" <?php if ($user->role_id == '1') echo ' selected="selected"'; ?>>Admin</option>
                                        <option value="2" <?php if ($user->role_id == '2') echo ' selected="selected"'; ?>>Marketing</option>
                                        <option value="3" <?php if ($user->role_id == '3') echo ' selected="selected"'; ?>>Sales</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-center mb-3">
                                        <button type="button" class="btn w-sm btn-danger waves-effect waves-light">Cancel</button>
                                        <button type="submit" class="btn w-sm btn-success waves-effect waves-light">Update</button>
                                      
                                    </div>
                                </div> <!-- end col -->
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
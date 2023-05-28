@extends('admin.layouts.master')

@section('content')

<!-- Start Page Content here -->
            <!-- ============================================================== -->

<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li>
                                <li class="breadcrumb-item active">Contact Us</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Contact Us</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 
            <form action="{{ url('admin/update/contact/us/1')}}" method="post" name="contactUs" id="contactUs" enctype="multipart/form-data" class="form-horizontal form-label-left">
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
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="projectname">Phone Number</label>
                                <input type="text" id="projectname" name="phone_number"  class="form-control" value="{{ $contact->phone_number }}">
                            </div>
                            <div class="form-group">
                                <label for="projectname">Fax Number</label>
                                <input type="text" id="projectname" name="fax_number" class="form-control" value="{{ $contact->fax_number }}">
                            </div>
                            <div class="form-group">
                                <label for="project-overview">Office Address</label>
                                <textarea class="form-control" id="summernote" rows="5" placeholder="Enter some brief od office address.." name="address" >{{ $contact->description }}</textarea>
                            </div>
                            
                            <div class="row mt-3">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="text-center mb-3">
                                            <button type="button" class="btn w-sm btn-danger waves-effect waves-light">Cancel</button>
                                            <button type="submit" class="btn w-sm btn-success waves-effect waves-light">Update</button>
                                          
                                        </div>
                                    </div> <!-- end col -->
                                </div>
                            </div>

                        </div> <!-- end card-body -->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div>
             </form>
            <!-- end row-->
        </div>
    </div>
</div>
@endsection

@section('scripts')


@endsection
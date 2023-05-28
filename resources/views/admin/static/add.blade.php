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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Static Pages</a></li>
                                <li class="breadcrumb-item active">Add Static page </li>
                            </ol>
                        </div>
                        <h4 class="page-title">Add Static Page</h4>
                    </div>
                </div>
            </div>
            <form action="{{ route('createStaticPage')}}" method="post" name="addstatic" id="addstatic" enctype="multipart/form-data" class="form-horizontal form-label-left">
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
                                <div class="form-group row mb-3">
                                    <label for="Username" class="col-3 col-form-label">Title</label>
                                    <div class="col-9">
                                        <input type="text" id="title" name="title" class="form-control" placeholder="e.g : abc" value=""  name="title">
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label">URL</label>
                                    <div class="col-9">
                                        <input type="text" class="form-control" id="url" placeholder="url" name="url" value=" " name="url">
                                    </div>
                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div><!-- end col -->
                </div>
                <!-- end row --> 
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">English Editor</h4>
                            <p class="sub-header font-13">Editor for English description</p>

                            <!-- basic summernote-->
                       <!--      <div id="summernote-basic"></div> -->
                       <textarea  id="summernote" name="description"></textarea>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div><!-- end col -->
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Arabic Editor</h4>
                            <p class="sub-header font-13">Editor for Arabic description</p>

                            <!-- basic summernote-->
                       <!--      <div id="summernote-basic"></div> -->
                       <textarea  id="summernote-arabic" name="description_arabic"></textarea>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div><!-- end col -->
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="text-center mb-3">
                        <button type="button" class="btn w-sm btn-danger waves-effect waves-light">Cancel</button>
                        <button type="submit" class="btn w-sm btn-success waves-effect waves-light">Update</button>
                      
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </form>
            <!-- end row --> 
            
        </div>

    </div> <!-- content -->

</div>

@endsection

@section('scripts')


@endsection
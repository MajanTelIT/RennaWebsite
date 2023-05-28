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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Banner</a></li>
                                <li class="breadcrumb-item active">Edit Banner</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Edit Banner</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 


            <div class="row">
                <div class="col-lg-6">
                    <div class="card-box">
                        <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">General</h5>
    
                        <form action="{{ url('admin/update/banner',$banner->id)}}" method="post" name="editbanner" id="editbanner" enctype="multipart/form-data" class="form-horizontal form-label-left">
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
                        <div class="form-group mb-3">
                            <label for="product-name">Banner Name <span class="text-danger">*</span></label>
                            <input type="text" id="product-name" name="banner_name" class="form-control" placeholder="e.g : Apple iMac" value="{{ $banner->banner_name }}">
                        </div>
                        <div class="form-group mb-3">
                            <label class="mb-2">Status <span class="text-danger">*</span></label>
                            <br>


                            <div class="radio form-check-inline">
                                <input type="radio" id="inlineRadio1" value="1" name="status" {{ ($banner->status=="1")? "checked" : "" }}>
                                <label for="inlineRadio1"> Active </label>
                            </div>
                            <div class="radio form-check-inline">
                                <input type="radio" id="inlineRadio2" value="2" name="status" {{ ($banner->status=="2")? "checked" : "" }}>
                                <label for="inlineRadio2"> Inactive </label>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                           <label for="banner-language">Banner Language <span class="text-danger">*</span></label>
                                <select class="form-control" id="example-select" name="language">

                                    <option value="1" <?php if ($banner->language == '1') echo ' selected="selected"'; ?>>English</option>
                                    <option value="2" <?php if ($banner->language == '2') echo ' selected="selected"'; ?>>Arabic</option>
                                   
                                </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="product-name">Banner URL <span class="text-danger"></span></label>
                            <input type="text" id="product-name" name="banner_image" class="form-control" placeholder="e.g : Apple iMac" value="{{asset('images/'.$banner->image_path)}}">
                        </div>
                    </div> <!-- end card-box -->
                    <div class="card-box">
                        <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Banner Images</h5>
                
                            <span class="control-label col-md-6 col-sm-6 col-xs-12 break-word">
                              <input type='file' id="imgInp" name="banner_image" accept="image/*" value="{{asset('images/'.$banner->image_path)}}" class="form-control text-left">
                              <br>
                              <img id="blah" src="{{asset('images/'.$banner->image_path)}}" alt="your image" height="100" />
                            </span>
                        </span>

                        <!-- Preview -->
                        <div class="dropzone-previews mt-3" id="file-previews"></div>

                    </div> <!-- end col-->
      
                </div> <!-- end col -->

                <div class="col-lg-6">

                    <div class="card-box">
                        <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Meta Data</h5>

                        <div class="form-group mb-3">
                            <label for="product-meta-title">Meta title</label>
                            <input type="text" class="form-control" name="meta_title" id="product-meta-title" placeholder="Enter title" value="{{ $banner->meta_title }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="product-meta-keywords">Meta Keywords</label>
                            <input type="text" class="form-control" name="meta_keywords" id="product-meta-keywords" placeholder="Enter keywords" value="{{ $banner->meta_keywords }}">
                        </div>

                        <div class="form-group mb-0">
                            <label for="product-meta-description">Meta Description </label>
                            <textarea class="form-control" rows="5" name="meta_description" id="product-meta-description" placeholder="Please enter description" value="">{{ $banner->meta_description }}</textarea>
                        </div>
                    </div> <!-- end card-box -->

                </div> <!-- end col-->
            </div>
            <!-- end row -->

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
        
    </div>

  </div> <!-- content -->

</div>

@endsection

@section('scripts')

 <script type="text/javascript">
      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#imgInp").change(function(){
        readURL(this);
    });
  </script>

@endsection
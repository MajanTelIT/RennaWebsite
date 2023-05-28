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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                            <li class="breadcrumb-item active">Mobile Porting</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Mobile Porting</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        
                                        <div class="row">
                                            <div class="col-lg-8">
                                  
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="text-lg-right mt-3 mt-lg-0">
                                                    <a href="{{ route('favouriteNumberCreate')  }}" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-plus-circle mr-1"></i> Add New</a>
                                                </div>
                                            </div><!-- end col-->
                                        </div> <!-- end row -->
                

                                    <table id="basic-datatable" class="table dt-responsive nowrap w-100 dataTable no-footer dtr-inline" role="grid" aria-describedby="basic-datatable_info" style="width: 1007px;">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" style="width: 156.4px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th>

                                                    <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" style="width: 114.4px;" aria-label="Office: activate to sort column ascending">Details</th>

                                                    <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" style="width: 82.4px;" aria-label="Salary: activate to sort column ascending">Description</th>
                                                    <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" style="width: 82.4px;" aria-label="Salary: activate to sort column ascending">Action</th></tr>
                                            </thead>
                                        
                                            <tbody>
                                                <tr class="odd">
                                                    <td class="dtr-control sorting_1" tabindex="0">Airi Satou</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td><button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Edit</button></td>
                                                </tr><tr class="even">
                                                    <td class="sorting_1 dtr-control">Angelica Ramos</td>
                                                    <td>Chief Executive Officer (CEO)</td>
                                                    <td>London</td>
                                                    <td><button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Edit</button></td>
                                                </tr><tr class="odd">
                                                    <td class="dtr-control sorting_1" tabindex="0">Ashton Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td><button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Edit</button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                        
                        </div>
                        <!-- end row-->
                        
                    </div>
    </div> <!-- content -->
</div>

@endsection
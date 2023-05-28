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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                                            <li class="breadcrumb-item active">Customer Message Detail</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Customer Messages #{{ $customer->id }}</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-xl-8 col-lg-7">
                                <!-- project card -->
                                <div class="card d-block">
                                    <div class="card-body">

                                        <div class="float-right">
                                            <div class="form-row">
                                                <div class="col-auto">
                                                    <a href="{{ route('writeToUs') }}" class="btn btn-sm btn-link"><i class="mdi mdi-keyboard-backspace"></i> Back</a>
                                                </div>
                                                <div class="col-auto">
                                                    
                                                </div>
                                            </div>
                                        </div> <!-- end dropdown-->

                                        <h4 class="mb-3 mt-0 font-17">Payout not received since last 3 months</h4>

                                        <div class="clerfix"></div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <!-- Reported by -->
                                                <label class="mt-2 mb-1">Phone Number:</label>
                                                <div class="media">
                                                    
                                                    <div class="media-body">
                                                        <p> {{ $customer->phone_number }} </p>
                                                    </div>
                                                </div>
                                                <!-- end Reported by -->
                                            </div> <!-- end col -->

                                            <div class="col-md-6">
                                                <!-- assignee -->
                                                <label class="mt-2 mb-1">Email Id :</label>
                                                <div class="media">
                                                    
                                                    <div class="media-body">
                                                        <p> {{ $customer->email }}</p>
                                                    </div>
                                                </div>
                                                <!-- end assignee -->
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->

                                        <div class="row">
                                            <div class="col-md-6">
                                                <!-- assignee -->
                                                <label class="mt-2 mb-1">Created On :</label>
                                                <p>{{ $customer->created_at }}</p>
                                                <!-- end assignee -->
                                            </div> <!-- end col -->

                                            <div class="col-md-6">
                                                <!-- assignee -->
                                                <label class="mt-2 mb-1">Customer Name :</label>
                                                <p>{{ $customer->name }}</p>
                                                <!-- end assignee -->
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->

      
                                        <label class="mt-4 mb-1">Overview :</label>

                                        <p class="text-muted mb-0">{{ $customer->message }}
                                            This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up.
                                        </p>

                                    </div> <!-- end card-body-->
                                    
                                </div> <!-- end card-->

                                <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-xl-4 col-lg-5">

                            </div>
                        </div>
                        <!-- end row -->
                        
                    </div>

    </div>
</div>

@endsection

@section('scripts')

<script type="text/javascript">

</script>

@endsection
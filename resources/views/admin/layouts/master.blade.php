<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>CRM Dashboard | UBold - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="base_url" content="{{ url('/') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <!-- App css -->
        <link href="{{ asset('assets/css/bootstrap-purple.min.css') }}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
        <link href="{{ asset('assets/css/app-purple.min.css') }}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

        <link href="{{ asset('assets/css/bootstrap-purple-dark.min.css') }}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
        <link href="{{ asset('assets/css/app-purple-dark.min.css') }}" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />
        <link href="{{ asset('assets/css/dropify.min.css') }}" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />
        <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
        <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Toaster css -->
        <link href="{{ asset('assets/css/sweetalert.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/toastr.min.css')}}">
        <!-- Plugins css -->
        <link href="{{ asset('assets/libs/quill/quill.core.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/quill/quill.bubble.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/quill/quill.snow.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/summernote/summernote-bs4.min.css')}}" rel="stylesheet" type="text/css" />

    </head>
     @yield('stylesheet') 
     <body class="loading">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                @include('admin.partials.header')
            </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">
                @include('admin.partials.sidebar')
            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
                @yield('content')
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
            <!--    Footer      -->
                @include('admin.partials.footer')

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
        <script src="{{ asset('assets/js/jquery-2.1.0.min.js')}}"></script>

        <!-- Vendor js -->
        <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

        <!-- Third Party js-->
        <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
        <script src="https://apexcharts.com/samples/assets/ohlc.js"></script>

        <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
        <script src="{{ asset('assets/js/toastr.min.js') }}"></script>

        <!-- third party js -->

        <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-select/js/dataTables.select.min.js') }}"></script>
        <script src="{{ asset('assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
        <script src="{{ asset('assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
        <!-- third party js ends -->

        <!-- Datatables init -->
        <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>

        <!-- Table Editable plugin-->
        <!-- <script src="{{ asset('assets/libs/jquery-tabledit/jquery.tabledit.min.js') }}"></script>-->

        <!-- Table editable init-->
       <!--  <script src="{{ asset('assets/js/pages/tabledit.init.js') }}"></script>-->

        <!-- App js -->
        <script src="{{ asset('assets/js/app.min.js') }}"></script>

          <script src="{{ asset('assets/js/validation.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.validate.min.js')}}"></script>
        <script src="{{ asset('assets/js/additional-methods.min.js')}}"></script>
        <script src="{{ asset('assets/js/additional-methods.extends.js')}}"></script>
        <!-- <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script> -->
        <script src="{{ asset('assets/js//toastr.min.js') }}"></script>
        {!! Toastr::message() !!}
         <!-- Plugins js -->
         <!-- Summernote js -->
        <script src="{{ asset('assets/libs/summernote/summernote-bs4.min.js') }}"></script>

        <!-- Init js -->
        <script src="{{ asset('assets/js/pages/form-summernote.init.js') }}"></script>
        <script type="text/javascript">

            $('#summernote').summernote({
                placeholder: 'Hello Bootstrap 4',
                tabsize: 2,
                height: 200
            });


            $('#summernote-arabic').summernote({
                placeholder: 'Hello Bootstrap 4',
                tabsize: 2,
                height: 200
            });

        </script>

    @yield('scripts')    

   

</body>
</html>
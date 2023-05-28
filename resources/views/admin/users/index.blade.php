@extends('admin.layouts.master')

@section('content')

<!-- Start Page Content here -->


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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                                <li class="breadcrumb-item active">User List</li>
                            </ol>
                        </div>
                        <h4 class="page-title">CMP Users</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-lg-8">
                              <!--   <form class="form-inline">
                                        <div class="form-group mb-2">
                                            <label for="inputPassword2" class="sr-only">Search</label>
                                            <input type="search" class="form-control" id="inputPassword2" placeholder="Search...">
                                        </div>
                                        <div class="form-group mx-sm-3 mb-2">
                                            <label for="status-select" class="mr-2">Status</label>
                                            <select class="custom-select" id="status-select">
                                                <option selected="">Choose...</option>
                                                <option value="1">Online</option>
                                                <option value="2">Offline</option>
                                            
                                            </select>
                                        </div>
                                    </form> -->
                            </div>
                            <div class="col-lg-4">
                                <div class="text-lg-right mt-3 mt-lg-0">
                                    <a href="{{ route('CreateUser')  }}" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-plus-circle mr-1"></i> Add User</a>
                                </div>
                            </div><!-- end col-->
                        </div> <!-- end row -->
                    </div> <!-- end card-box -->
                </div> <!-- end col-->
            </div>

            
            <!-- end row -->        

             <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                   
                            
                            <table id="DataTable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>S No.</th>
                                        <th>Name</th>
                                        <th>Email Id</th>
                                        <th>Msisdn</th>
                                        <th>Status</th>
                                        <th>Updated date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                @php $i = 1; @endphp 
                                @forelse($users as $index=>$U)
                                    <tr>
                                        <td>{{ $index+1}}</td>
                                        <td>{{ $U->name }}</td>
                                        <td>{{ $U->email }}</td>
                                        <td>{{ $U->msisdn }}</td>
                                        <td>{{ $U->status =='1' ? 'Active' :'Inactive'}}</td>
                                        <td>{{ $U->updated_at }}</td>
                                        <td class="column-wrap">
                                           <a href="{{ url('admin/edit/user/'.$U->id) }}" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"> Edit</i></a>
                                        </td>
                                    </tr>
                                @php $i++; @endphp 
                                @empty   
                                   <tr class="row">
                                      <td>
                                        {{ 'No Data Found!' }}
                                      </td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>

                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
        </div>
        <!-- end row -->                        
    </div>

  </div> <!-- content -->

</div>

@endsection

@section('scripts')  

<script type="text/javascript">
    $(document).ready(function() {
        $('#DataTable').DataTable();
    } );
</script>
@endsection  
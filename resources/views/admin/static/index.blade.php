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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Renna</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Static Pages</a></li>
                                            <li class="breadcrumb-item active">Static Pages List</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Static Pages List </h4>
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
                                                <a href="{{ route('createStaticPage')  }}" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-plus-circle mr-1"></i> Add New</a>
                                            </div>
                                        </div><!-- end col-->
                                    </div> <!-- end row -->
                                </div> <!-- end card-box -->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->

                        <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                   
                            
                            <table id="DataTable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>S No.</th>
                                        <th>Title</th>
                                        <th>URL</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                @php $i = 1; @endphp 
                                @forelse($static as $index=>$B)
                                    <tr>
                                        <td>{{ $index+1}}</td>
                                        <td>{{ $B->title }}</td>
                                        <td>{{ $B->url }}</td>
                                        <td class="column-wrap">
                                  
                                        <a href="{{ url('admin/edit/static/pages/'.$B->id) }}" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"> Edit</i></a>
                                       
                                        @if($B->status==1)
                                        <button onclick="Pageblock('{{$B->id}}')" class="btn btn-primary"><i class="fa fa-lock" aria-hidden="true"></i> Block</button>                                       
                                        @else($B->status==2)
                                        <button onclick="PageUnblock('{{$B->id}}')" class="btn btn-danger"><i class="fa fa-unlock" aria-hidden="true"></i> Unblock</button>
                                       @endif
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
        <!-- content -->
  </div> 

</div>

@endsection
@section('scripts')  


<script type="text/javascript">
    $(document).ready(function() {
        $('#DataTable').DataTable();
    } );

</script>

<script type="text/javascript">
    var public_url="<?php echo URL::to('/');?>"; 
    var base_url = $("#base_url").val();

  function Pageblock(id) {

         swal({
          title: "Are you sure",
          text: "Are you sure you  want to block?",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#069edb",
          confirmButtonText: "Yes, block it!",
          closeOnConfirm: false
        }, function() {
            $.ajaxSetup({
               headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
             });
           $.ajax({
            type: 'post',
                data: {
                '_method': 'post',
                'id':id
            },
            url: public_url + "/admin/block/static/page/" +id,
            success: function(data) {
                swal({
                  title: " Success!",
                  text: "Page is successfully blocked!",
                  type: "success",
                  //timer: 3000
                },
                function() {
                  window.location.href = public_url + '/admin/static/pages/list';
                });
            }
          });
        });
    }
    
      function PageUnblock(id) {
 
          swal({
            title: "Are you sure",
            text: "Are you sure you to  want unblock?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#069edb",
            confirmButtonText: "Yes, unblock it!",
            closeOnConfirm: false
          }, function() {

            $.ajaxSetup({
               headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
             });         
             $.ajax({
              type: 'post',
              data: {
              '_method': 'post',
              'id':id
              },
              url: public_url + "/admin/unblock/static/page/" +id,
              success: function(data) {
                swal({
                    title: " Success!",
                    text: "Page is successfully unblocked!",
                    type: "success",
                    //timer: 3000
                  },
                  function() {
                    window.location.href = public_url + '/admin/static/pages/list';
                  });
              }
            });
          });

      }
</script>

@endsection  
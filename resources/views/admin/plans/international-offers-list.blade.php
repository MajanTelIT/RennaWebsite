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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                <li class="breadcrumb-item active">Data Bundles</li>
                            </ol>
                        </div>
                        <h4 class="page-title">International offers list</h4>
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
                                    <form class="form-inline">
                                        <div class="form-group">
                                            <label for="inputPassword2" class="sr-only">Search</label>
                                            <input type="search" class="form-control" id="inputPassword2" placeholder="Search...">
                                        </div>
                                        <div class="form-group mx-sm-3">
                                            <label for="status-select" class="mr-2">Sort By</label>
                                            <select class="custom-select" id="status-select">
                                                <option selected="">All</option>
                                                <option value="1">Calling to India</option>
                                                <option value="2">Calling to Bangladesh</option>
                                                <option value="3">Calling pakistan</option>
                                                <option value="4">International Off-Peak Calling Promotion</option>
                                                <option value="5">Standard International Tariffs</option>
                                                <option value="6">International MMS Rates</option>
                                            
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-4">
                                    <div class="text-lg-right mt-3 mt-lg-0">
                                        
                                        <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-target="#custom-modal"><i class="mdi mdi-plus-circle mr-1"></i> Add New</button>
                                    </div>
                                </div><!-- end col-->
                            </div>

                            
                            <p class="sub-header font-13">Inline edit like a spreadsheet on two columns only and without identifier column.</p>
                            <div class="table-responsive">
                                <table class="table table-centered mb-0" id="inline-editable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                        <tr id="1">
                                            <td><span class="tabledit-span tabledit-identifier">1</span><input class="tabledit-input tabledit-identifier" type="hidden" name="id" value="1" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">Tiger Nixon</span><input class="tabledit-input form-control form-control-sm" type="text" name="col1" value="Tiger Nixon" style="display: none;" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">System Architect</span><input class="tabledit-input form-control form-control-sm" type="text" name="col2" value="System Architect" style="display: none;" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">Edinburgh</span><input class="tabledit-input form-control form-control-sm" type="text" name="col3" value="Edinburgh" style="display: none;" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">61</span><input class="tabledit-input form-control form-control-sm" type="text" name="col4" value="61" style="display: none;" disabled=""></td>
                                            <td>2011/04/25</td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">$320,800</span><input class="tabledit-input form-control form-control-sm" type="text" name="col6" value="$320,800" style="display: none;" disabled=""></td>
                                        </tr>
                                        <tr id="2">
                                            <td><span class="tabledit-span tabledit-identifier">2</span><input class="tabledit-input tabledit-identifier" type="hidden" name="id" value="2" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">Garrett Winters</span><input class="tabledit-input form-control form-control-sm" type="text" name="col1" value="Garrett Winters" style="display: none;" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">Accountant</span><input class="tabledit-input form-control form-control-sm" type="text" name="col2" value="Accountant" style="display: none;" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">Tokyo</span><input class="tabledit-input form-control form-control-sm" type="text" name="col3" value="Tokyo" style="display: none;" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">63</span><input class="tabledit-input form-control form-control-sm" type="text" name="col4" value="63" style="display: none;" disabled=""></td>
                                            <td>2011/07/25</td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">$170,750</span><input class="tabledit-input form-control form-control-sm" type="text" name="col6" value="$170,750" style="display: none;" disabled=""></td>
                                        </tr>
                                        <tr id="3">
                                            <td><span class="tabledit-span tabledit-identifier">3</span><input class="tabledit-input tabledit-identifier" type="hidden" name="id" value="3" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">Ashton Cox</span><input class="tabledit-input form-control form-control-sm" type="text" name="col1" value="Ashton Cox" style="display: none;" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">Junior Technical Author</span><input class="tabledit-input form-control form-control-sm" type="text" name="col2" value="Junior Technical Author" style="display: none;" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">San Francisco</span><input class="tabledit-input form-control form-control-sm" type="text" name="col3" value="San Francisco" style="display: none;" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">66</span><input class="tabledit-input form-control form-control-sm" type="text" name="col4" value="66" style="display: none;" disabled=""></td>
                                            <td>2009/01/12</td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">$86,000</span><input class="tabledit-input form-control form-control-sm" type="text" name="col6" value="$86,000" style="display: none;" disabled=""></td>
                                        </tr>
                                        <tr id="4">
                                            <td><span class="tabledit-span tabledit-identifier">4</span><input class="tabledit-input tabledit-identifier" type="hidden" name="id" value="4" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">Cedric Kelly</span><input class="tabledit-input form-control form-control-sm" type="text" name="col1" value="Cedric Kelly" style="display: none;" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">Senior Javascript Developer</span><input class="tabledit-input form-control form-control-sm" type="text" name="col2" value="Senior Javascript Developer" style="display: none;" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">Edinburgh</span><input class="tabledit-input form-control form-control-sm" type="text" name="col3" value="Edinburgh" style="display: none;" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">22</span><input class="tabledit-input form-control form-control-sm" type="text" name="col4" value="22" style="display: none;" disabled=""></td>
                                            <td>2012/03/29</td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">$433,060</span><input class="tabledit-input form-control form-control-sm" type="text" name="col6" value="$433,060" style="display: none;" disabled=""></td>
                                        </tr>
                                        <tr id="5">
                                            <td><span class="tabledit-span tabledit-identifier">5</span><input class="tabledit-input tabledit-identifier" type="hidden" name="id" value="5" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">Airi Satou</span><input class="tabledit-input form-control form-control-sm" type="text" name="col1" value="Airi Satou" style="display: none;" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">Accountant</span><input class="tabledit-input form-control form-control-sm" type="text" name="col2" value="Accountant" style="display: none;" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">Tokyo</span><input class="tabledit-input form-control form-control-sm" type="text" name="col3" value="Tokyo" style="display: none;" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">33</span><input class="tabledit-input form-control form-control-sm" type="text" name="col4" value="33" style="display: none;" disabled=""></td>
                                            <td>2008/11/28</td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">$162,700</span><input class="tabledit-input form-control form-control-sm" type="text" name="col6" value="$162,700" style="display: none;" disabled=""></td>
                                        </tr>
                                        <tr id="6">
                                            <td><span class="tabledit-span tabledit-identifier">6</span><input class="tabledit-input tabledit-identifier" type="hidden" name="id" value="6" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">Brielle Williamson</span><input class="tabledit-input form-control form-control-sm" type="text" name="col1" value="Brielle Williamson" style="display: none;" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">Integration Specialist</span><input class="tabledit-input form-control form-control-sm" type="text" name="col2" value="Integration Specialist" style="display: none;" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">New York</span><input class="tabledit-input form-control form-control-sm" type="text" name="col3" value="New York" style="display: none;" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">61</span><input class="tabledit-input form-control form-control-sm" type="text" name="col4" value="61" style="display: none;" disabled=""></td>
                                            <td>2012/12/02</td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">$372,000</span><input class="tabledit-input form-control form-control-sm" type="text" name="col6" value="$372,000" style="display: none;" disabled=""></td>
                                        </tr>
                                        <tr id="7">
                                            <td><span class="tabledit-span tabledit-identifier">7</span><input class="tabledit-input tabledit-identifier" type="hidden" name="id" value="7" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">Herrod Chandler</span><input class="tabledit-input form-control form-control-sm" type="text" name="col1" value="Herrod Chandler" style="display: none;" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span" style="">Sales Assistant</span><input class="tabledit-input form-control form-control-sm" type="text" name="col2" value="Sales Assistant" style="display: none;" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">San Francisco</span><input class="tabledit-input form-control form-control-sm" type="text" name="col3" value="San Francisco" style="display: none;" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">59</span><input class="tabledit-input form-control form-control-sm" type="text" name="col4" value="59" style="display: none;" disabled=""></td>
                                            <td>2012/08/06</td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">$137,500</span><input class="tabledit-input form-control form-control-sm" type="text" name="col6" value="$137,500" style="display: none;" disabled=""></td>
                                        </tr>
                                        <tr id="8">
                                            <td><span class="tabledit-span tabledit-identifier">8</span><input class="tabledit-input tabledit-identifier" type="hidden" name="id" value="8" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">Rhona Davidson</span><input class="tabledit-input form-control form-control-sm" type="text" name="col1" value="Rhona Davidson" style="display: none;" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">Integration Specialist</span><input class="tabledit-input form-control form-control-sm" type="text" name="col2" value="Integration Specialist" style="display: none;" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">Tokyo</span><input class="tabledit-input form-control form-control-sm" type="text" name="col3" value="Tokyo" style="display: none;" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">55</span><input class="tabledit-input form-control form-control-sm" type="text" name="col4" value="55" style="display: none;" disabled=""></td>
                                            <td>2010/10/14</td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">$327,900</span><input class="tabledit-input form-control form-control-sm" type="text" name="col6" value="$327,900" style="display: none;" disabled=""></td>
                                        </tr>
                                        <tr id="9">
                                            <td><span class="tabledit-span tabledit-identifier">9</span><input class="tabledit-input tabledit-identifier" type="hidden" name="id" value="9" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">Colleen Hurst</span><input class="tabledit-input form-control form-control-sm" type="text" name="col1" value="Colleen Hurst" style="display: none;" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span" style="">Javascript Developer</span><input class="tabledit-input form-control form-control-sm" type="text" name="col2" value="Javascript Developer" style="display: none;" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">San Francisco</span><input class="tabledit-input form-control form-control-sm" type="text" name="col3" value="San Francisco" style="display: none;" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">39</span><input class="tabledit-input form-control form-control-sm" type="text" name="col4" value="39" style="display: none;" disabled=""></td>
                                            <td>2009/09/15</td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">$205,500</span><input class="tabledit-input form-control form-control-sm" type="text" name="col6" value="$205,500" style="display: none;" disabled=""></td>
                                        </tr>
                                        <tr id="10">
                                            <td><span class="tabledit-span tabledit-identifier">10</span><input class="tabledit-input tabledit-identifier" type="hidden" name="id" value="10" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">Sonya Frost</span><input class="tabledit-input form-control form-control-sm" type="text" name="col1" value="Sonya Frost" style="display: none;" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span" style="">Software Engineer</span><input class="tabledit-input form-control form-control-sm" type="text" name="col2" value="Software Engineer" style="display: none;" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">Edinburgh</span><input class="tabledit-input form-control form-control-sm" type="text" name="col3" value="Edinburgh" style="display: none;" disabled=""></td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">23</span><input class="tabledit-input form-control form-control-sm" type="text" name="col4" value="23" style="display: none;" disabled=""></td>
                                            <td>2008/12/13</td>
                                            <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">$103,600</span><input class="tabledit-input form-control form-control-sm" type="text" name="col6" value="$103,600" style="display: none;" disabled=""></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- end .table-responsive-->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->
            </div> <!-- end row -->    
        </div>
    </div> <!-- content -->
</div>

@endsection
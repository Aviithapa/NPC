@extends('admin.layout.app')

  

@section('content')

  <!-- Content Header (Page header) -->
  <div class="content-header sty-one">
    <h1>Officer Dashboard</h1>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><i class="fa fa-angle-right"></i> Officer Dashboard</li>
    </ol>
  </div>
  
  <!-- Main content -->
  <div class="content">
    <div class="row">
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 m-b-3">
        <div class="card">
          <div class="card-body">
            <div class="m-b-1"> <i class="icon-people f-30 text-blue"></i> </div>
            <div class="info-widget-text row">
              <div class="col-sm-7 pull-left"><span>Pharmacists</span></div>
              <div class="col-sm-5 pull-right text-right text-blue f-25">158</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 m-b-3">
        <div class="card">
          <div class="card-body">
            <div class="m-b-1"> <i class="icon-people f-30 text-green"></i></div>
            <div class="info-widget-text row">
              <div class="col-sm-7 pull-left"><span>New Applicants</span></div>
              <div class="col-sm-5 pull-right text-right text-blue f-25">1,505</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 m-b-3">
        <div class="card">
          <div class="card-body">
            <div class="m-b-1"> <i class="icon-people f-30 text-red"></i></div>
            <div class="info-widget-text row">
              <div class="col-sm-8 pull-left"><span>Rejected Applicant</span></div>
              <div class="col-sm-4 pull-right text-right text-blue f-23">1,505</div>
            </div>
          </div>
        </div>
      </div>
      {{-- <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 m-b-3">
        <div class="card">
          <div class="card-body">
            <div class="m-b-1"> <i class="icon-emotsmile f-30 text-red"></i></div>
            <div class="info-widget-text row">
              <div class="col-sm-7 pull-left"><span>Active Nurses</span></div>
              <div class="col-sm-5 pull-right text-right text-blue f-25">400</div>
            </div>
          </div>
        </div>
      </div> --}}
      {{-- <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 m-b-3">
        <div class="card">
          <div class="card-body">
            <div class="m-b-1"> <i class="icon-earphones-alt f-30 text-orange"></i></div>
            <div class="info-widget-text row">
              <div class="col-sm-7 pull-left"><span>Receptionist</span></div>
              <div class="col-sm-5 pull-right text-right text-blue f-25">15</div>
            </div>
          </div>
        </div>
      </div> --}}
    </div>
    <!-- /.row -->
    
    <!-- /.row -->
    
    <div class="row">
      <div class="col-lg-12 m-b-3">
        <div class="box box-info">
          <div class="box-header with-border p-t-1">
            <h3 class="box-title text-black">New Applicant List</h3>
            <div class="pull-right"> <a href="#">View More <i class="fa fa-long-arrow-right"></i></a> </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="table-responsive">
              <table class="table no-margin">
                <thead>
                  <tr>
                    <th> ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Applied Level</th>
                    <th>Date</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><a href="#">OR9842</a></td>
                    <td>John Deo</td>
                    <td>45</td>
                    <td>Diploma</td>
                    <td> 12-05-2018 </td>
                    <td><span class="label label-success">view</span></td>
                  </tr>
                  <tr>
                    <td><a href="#">OR1848</a></td>
                    <td>Sr. John Deo</td>
                    <td>25</td>
                    <td>Bachelor</td>
                    <td>12-05-2018 </td>
                    <td><span class="label label-primary">view</span></td>
                  </tr>
                  <tr>
                    <td><a href="#">OR7429</a></td>
                    <td>Sr. John Deo</td>
                    <td>32</td>
                    <td>Diploma</td>
                    <td>12-05-2018 </td>
                    <td><span class="label label-warning">view</span></td>
                  </tr>
                  <tr>
                    <td><a href="#">OR7429</a></td>
                    <td>John Deo</td>
                    <td>30</td>
                    <td>Bachelor</td>
                    <td>12-05-2018 </td>
                    <td><span class="label label-success">view</span></td>
                  </tr>
                  <tr>
                    <td><a href="#">OR1848</a></td>
                    <td>Sr. John Deo</td>
                    <td>25</td>
                    <td>Diploma</td>
                    <td>12-05-2018 </td>
                    <td><span class="label label-success">view</span></td>
                  </tr>
                  <tr>
                    <td><a href="#">OR7429</a></td>
                    <td>John Deo</td>
                    <td>36</td>
                    <td>Bachelor</td>
                    <td>12-05-2018 </td>
                    <td><span class="label label-default">view</span></td>
                  </tr>
                  <tr>
                    <td><a href="#">OR9842</a></td>
                    <td>Sr. John Deo</td>
                    <td>42</td>
                    <td>Diploma</td>
                    <td>12-05-2018</td>
                    <td><span class="label label-success">view</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.table-responsive --> 
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
    <!-- /.row --> 
  </div>

@endsection

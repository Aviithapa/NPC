@extends('admin.layout.app')

@section('content')
<div class="content-header sty-one">
    <h1>Student Dashboard</h1>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><i class="fa fa-angle-right"></i> Application Form</li>
    </ol>
  </div>
  <div class="content">
  <div class="row">
    <div class="col-lg-12 m-b-3">
      <div class="box box-info">
        <div class="box-header with-border p-t-1">
          <h3 class="box-title text-black">Applicantion List</h3>
        </div>
        <div class="container-fluid">
           <a href="{{ route('student.dashboard.application.create') }}"> <button class="btn btn-primary">New Application</button> </a>
            {{-- @include('admin.website.application.form') --}}

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
                </tbody>
              </table>
        </div>
      </div>
    </div>
  </div>
  </div>
@endsection
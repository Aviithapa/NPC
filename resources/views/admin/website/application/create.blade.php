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
          <h3 class="box-title text-black">New Applicant List</h3>
        </div>
        <div class="container-fluid">
            @include('admin.website.application.form')
        </div>
      </div>
    </div>
  </div>
  </div>
@endsection
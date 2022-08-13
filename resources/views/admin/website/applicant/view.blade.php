@extends('admin.layout.app')

@section('content')

    <!-- Main content -->
    <div class="content">
        <div class="row">
            <div class="col-lg-4">
                <div class="user-profile-box m-b-3 bg-black">
                    <div class="verified-section">
                        <span>Verified by</span><br>
                        <ul class="nav nav-tabs profile-tab" role="tablist">
                         
                        </ul>
                    </div>
                    <div class="box-profile text-white">
                        <img class="profile-user-img img-responsive m-b-2" src="" alt="User profile picture">
                        <h3 class="profile-username text-center">isset($user_data)?$user_data->name:''</h3>
                        <p class="text-center">isset($user_data)?$user_data->email:''</p>
                    </div>
                </div>
                <div class="card m-b-3">
                    <div class="card-body">
                        <div class="box-body">
                            <strong><i class="fa fa-envelope margin-r-5"></i> Email address </strong>
                            <p class="text-muted">isset($user_data)?$user_data->email:''</p>
                            <hr>
                            <strong><i class="fa fa-phone margin-r-5"></i> Phone</strong>
                            <p>isset($user_data)?$user_data->phone_number:'s' </p>

                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="info-box">
                    <div class="card tab-style1">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs profile-tab table-responsive" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="true">Details Information</a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#review" role="tab">Review Details</a> </li>

                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="home" role="tabpanel" aria-expanded="true">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                    <tr>
                                                        <td class="text-bold">Name</td>
                                                        <td>Abhishek Thapa</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold">Grand Father Name</td>
                                                        <td> Daulat Singh Thapa| </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold">Father Name</td>
                                                        <td>$data->father_name |  $data->father_name_nep</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold">Mother Name</td>
                                                        <td>$data->mother_name | $data->mother_name_nep </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold">Sex</td>
                                                        <td>$data->sex  </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold">Marital Status</td>
                                                        <td>$data->marital_status  </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold">Ethics</td>
                                                        <td>$data->ethics  </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold">Date of Birth</td>
                                                        <td> B.S. $data->dob_nep </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                    <tr>
                                                        <td class="text-bold">Citizenship Number</td>
                                                        <td>$data->citizenship_number</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold">Citizenship issue date</td>
                                                        <td>$data->citizenship_issue_date</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold">Citizenship Issue District</td>
                                                        <td>$data->issue_district</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold">Province</td>
                                                        <td>$data->development_region  </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold">District</td>
                                                        <td>$data->district  </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold">Municipality</td>
                                                        <td>$data->vdc_municiplality  </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold">Ward No</td>
                                                        <td>$data->ward_no  </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--second tab-->
                            <div class="tab-pane" id="review" role="tabpanel">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <td>State</td>
                                                    <td>Status</td>
                                                    <td>Remarks</td>
                                                    <td>Date</td>
                                                    <td>Time</td>
                                                    <td>Created By</td>
                                                    </thead>
                                                    <tbody>
                                                   
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="info-box">
                    <div class="card tab-style1">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs profile-tab" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#education" role="tab">Qualification</a> </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="education" role="tabpanel" aria-expanded="true">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <td>S.N.</td>
                                                    <td>Name</td>
                                                    <td>Board University</td>
                                                    <td>Program Name</td>
                                                    <td>Collage Name</td>
                                                    </thead>
                                                    <tbody>
                                    
                                                  
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="level" role="tabpanel" aria-expanded="true">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card-body">
                                                <form class="form-horizontal form-material" action="#" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="profile_id" value="$data->id">
                                                    <div class="form-group">
                                                        <label class="col-sm-12">Select Level</label>
                                                        <div class="col-sm-12">
                                                            <select class="form-control form-control-line" name="level" required>
                                                                <option >$data->level</option>
                                                                <option value="1">Specification</option>
                                                                <option value="2">Bachelor</option>
                                                                <option value="3">PCL</option>
                                                                <option value="4">TSLC</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <button class="btn btn-success">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="info-box">
                    <div class="card tab-style1">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs profile-tab" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#profile" role="tab" aria-expanded="false">Documents</a> </li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="profile" role="tabpanel" aria-expanded="false">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th scope="col">level</th>
                                                    <th scope="col">Transcript</th>
                                                    <th scope="col">Certificate</th>
                                                    <th scope="col">Provisional</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                        
                                                <tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="table-responsive">
                                            <header>Supportive Documents</header>
                                            <table class="table table-bordered">
                                                <thead>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Citizenship</td>
                                                    <td>  <img src="$data->getCitizenshipFrontImage()" onclick="onClick(this)" alt="citizenship front image" width="200" height="200">
                                                    </td>
                                                    <td>  <img src="$data->getCitizenshipBackImage()" onclick="onClick(this)" alt="citizenship back image" width="200" height="200">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Signature</td>
                                                    <td>  <img src="$data->getSignatureImage()" onclick="onClick(this)" alt="signature image"  width="200" height="200">
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

      
        <div class="row">
            <div class="col-lg-12">
                <div class="info-box">
                    <div class="card tab-style1">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs profile-tab" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#settings" role="tab">Settings</a> </li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="settings" role="tabpanel">
                                <div class="card-body">
                                    <form class="form-horizontal form-material" action="route("operator.applicant.profile.list.status")" method="POST">
                                        @csrf

                                        <input type="hidden" name="profile_id" value="$data->id">
                                        <div class="form-group">
                                            <label class="col-md-12">Remarks</label>
                                            <div class="col-md-12">
                                                <textarea rows="5" name="remarks" class="form-control form-control-line"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-12">Select Status</label>
                                            <div class="col-sm-12">
                                                <select class="form-control form-control-line" name="profile_status" required>
                                                    <option value="Reviewing">Verified</option>
                                                    <option value="Reviewing">Pending</option>
                                                    <option value="Rejected">Rejected</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button class="btn btn-success">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    

        <!-- Main row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="info-box">
                    <div class="card tab-style1">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs profile-tab" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#abc" role="tab" aria-expanded="true">Licence Exam Applied</a> </li>

                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!--second tab-->
                            <div class="tab-pane active" id="abc" role="tabpanel" aria-expanded="true">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <td>S.N.</td>
                                                    <td>Exam Name</td>
                                                    <td>Voucher Image</td>
                                                    <td>Applied Date</td>
                                                    <td>Program Name</td>
                                                    <td>State</td>
                                                    <td>Status</td>
                                                    <td>Action</td>
                                                    </thead>
                                                    <tbody>
                                                  
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
    <!-- /.content -->
    <style>
        .modal-body {
            max-height: 80vh;
            overflow-y: auto;
            max-width: 100vh;
        }
    </style>
    <div class="modal" id="modal01">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" onclick="$('#modal01').css('display','none')" class="close"  aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="img01" style="max-width:100%">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
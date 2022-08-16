@if(isset($model))
  {{ Form::model($model, ['url' => route('dashboard.application.update', $model->id), 'method' => 'PUT', 'files' => true]) }}
@else
  {{ Form::open([' url ' => url('#'), 'method' => 'POST', 'files' => true]) }}
@endif

<div class="row">
    <div class="col-lg-4">
        <div class="col-md-12 col-lg-12">
            <label>Profile Image *</label><br>
            @if(isset($user))
                <img src="{{url(isset($user)?$user->getTranscriptImage():imageNotFound())}}" height="250" width="200"
                     id="transcript_img">

            @else
                <img src="{{isset($user)?$user->getTranscriptImage():imageNotFound()}}" height="250" width="200"
                     id="transcript_img">
            @endif
        </div>

        <div class="form-group col-md-12 col-lg-12">
            <small>Size: 1600*622 px</small>
            <input type="file" id="transcript_image" name="transcript_image"
                   onclick="anyFileUploader('transcript')">
            <input type="hidden" id="transcript_path" name="transcript" class="form-control"
                   value="{{isset($qualification)?$qualification->transcript_image:''}}"/>
            {!! $errors->first('image', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
</div>
    <div class="row">
    <div class="col-lg-4">
        <fieldset class="form-group">
          {!! Form::label('first_name','First Name *:', ['class' => 'form-label']) !!}
          {!! Form::text('first_name',null, ['class' => 'form-control']) !!}
        </fieldset>
    </div>
    <div class="col-lg-4">
        <fieldset class="form-group">
          {!! Form::label('middle_name','Middle Name:', ['class' => 'form-label']) !!}
          {!! Form::text('middle_name',null, ['class' => 'form-control']) !!}
        </fieldset>
    </div>
    <div class="col-lg-4">
        <fieldset class="form-group">
          {!! Form::label('last_name','Last Name *:', ['class' => 'form-label']) !!}
          {!! Form::text('last_name',null, ['class' => 'form-control']) !!}
        </fieldset>
    </div>

    {{-- Nepali Name --}}

    <div class="col-lg-4">
        <fieldset class="form-group">
          {!! Form::label('first_name_nepali','पहिलो नाम*:', ['class' => 'form-label']) !!}
          {!! Form::text('first_name',null, ['class' => 'form-control']) !!}
        </fieldset>
    </div>
    <div class="col-lg-4">
        <fieldset class="form-group">
          {!! Form::label('middle_name_nepali','बीचको नाम:', ['class' => 'form-label']) !!}
          {!! Form::text('middle_name',null, ['class' => 'form-control']) !!}
        </fieldset>
    </div>
    <div class="col-lg-4">
        <fieldset class="form-group">
          {!! Form::label('last_name_nepali','थर *:', ['class' => 'form-label']) !!}
          {!! Form::text('last_name',null, ['class' => 'form-control']) !!}
        </fieldset>
    </div>

    <div class="col-lg-4">
        <fieldset class="form-group">
          {!! Form::label('dob_nepali','जन्म मिति', ['class' => 'form-label']) !!}
          {!! Form::date('dob_nepali',null, ['class' => 'form-control']) !!}
        </fieldset>
    </div>

    <div class="col-lg-4">
        <fieldset class="form-group">
          {!! Form::label('dob_english','Date of birth', ['class' => 'form-label']) !!}
          {!! Form::date('dob_english',null, ['class' => 'form-control']) !!}
        </fieldset>
    </div>

    <div class="col-lg-4">
        <fieldset class="form-group">
          {!! Form::label('citizenship_number','Citizenship Number', ['class' => 'form-label']) !!}
          {!! Form::text('citizenship_number',null, ['class' => 'form-control']) !!}
        </fieldset>
    </div>

    <div class="col-lg-4">
        <fieldset class="form-group">
          {!! Form::label('issued_district','Issued Disrict', ['class' => 'form-label']) !!}
          {!! Form::text('issued_district',null, ['class' => 'form-control']) !!}
        </fieldset>
    </div>

    <div class="col-lg-4">
        <fieldset class="form-group">
          {!! Form::label('passport_number','Passport Number', ['class' => 'form-label']) !!}
          {!! Form::text('passport_number',null, ['class' => 'form-control']) !!}
        </fieldset>
    </div>

    <div class="col-lg-4">
        <fieldset class="form-group">
          {!! Form::label('blood_group','Blood Group', ['class' => 'form-label']) !!}
          {!! Form::text('blood_group',null, ['class' => 'form-control']) !!}
        </fieldset>
    </div>

        <div class="col-lg-12">
        <h4 class="text-black">Temporary Address</h4>
        </div>
    
    <div class="col-lg-4">
        <fieldset class="form-group">
          {!! Form::label('province_tem','Province', ['class' => 'form-label']) !!}
          {!! Form::text('province_tem',null, ['class' => 'form-control']) !!}
        </fieldset>
    </div>

    <div class="col-lg-4">
        <fieldset class="form-group">
          {!! Form::label('district_tem','District', ['class' => 'form-label']) !!}
          {!! Form::text('district_tem',null, ['class' => 'form-control']) !!}
        </fieldset>
    </div>

    <div class="col-lg-4">
        <fieldset class="form-group">
          {!! Form::label('municipality_tem','Municipality', ['class' => 'form-label']) !!}
          {!! Form::text('municipality_tem',null, ['class' => 'form-control']) !!}
        </fieldset>
    </div>

    <div class="col-lg-4">
        <fieldset class="form-group">
          {!! Form::label('ward_tem','Ward', ['class' => 'form-label']) !!}
          {!! Form::Number('ward_tem',null, ['class' => 'form-control']) !!}
        </fieldset>
    </div>

    <div class="col-lg-4">
        <fieldset class="form-group">
          {!! Form::label('tol_no_tem','Tol No.', ['class' => 'form-label']) !!}
          {!! Form::Number('to_no_tem',null, ['class' => 'form-control']) !!}
        </fieldset>
    </div>
    <div class="col-lg-12">
    <h4 class="text-black">Permanent Address</h4>
    </div>

    <div class="col-lg-4">
        <fieldset class="form-group">
          {!! Form::label('province_per','Province', ['class' => 'form-label']) !!}
          {!! Form::text('province_per',null, ['class' => 'form-control']) !!}
        </fieldset>
    </div>

    <div class="col-lg-4">
        <fieldset class="form-group">
          {!! Form::label('district_per','District', ['class' => 'form-label']) !!}
          {!! Form::text('district_per',null, ['class' => 'form-control']) !!}
        </fieldset>
    </div>

    <div class="col-lg-4">
        <fieldset class="form-group">
          {!! Form::label('municipality_per','Municipality', ['class' => 'form-label']) !!}
          {!! Form::text('municipality_per',null, ['class' => 'form-control']) !!}
        </fieldset>
    </div>

    <div class="col-lg-4">
        <fieldset class="form-group">
          {!! Form::label('ward_per','Ward', ['class' => 'form-label']) !!}
          {!! Form::Number('ward_per',null, ['class' => 'form-control']) !!}
        </fieldset>
    </div>

    <div class="col-lg-4">
        <fieldset class="form-group">
          {!! Form::label('tol_no_per','Tol No.', ['class' => 'form-label']) !!}
          {!! Form::Number('to_no_per',null, ['class' => 'form-control']) !!}
        </fieldset>
    </div>
    <div class="grid-body ">
        <div class="row">
            <div class="col-lg-4">
                <label>Citizenship Front Image</label>
                <div class="col-md-12 col-lg-12">
                    @if(isset($data))
                        <img src="{{url(isset($data)?$data->getCitizenshipFrontImage():imageNotFound())}}" height="250" width="200"
                             id="citizenship_front_img">

                    @else
                        <img src="{{isset($data)?$data->getCitizenshipFrontImage():imageNotFound()}}" height="250" width="200"
                             id="citizenship_front_img">
                    @endif
                </div>

                <div class="form-group col-md-12 col-lg-12">
                    <small>Below 1 mb</small>
                    <br>
                    <small id="citizenship_front_help_text" class="help-block"></small>
                    <div class="progress progress-striped active" role="progressbar" aria-valuemin="0"
                         aria-valuemax="100"
                         aria-valuenow="0">
                        <div id="citizenship_front_progress" class="progress-bar progress-bar-success"
                             style="width: 0%">
                        </div>
                    </div><br>
                    <input type="file" id="citizenship_front_image" name="citizenship_front_image"
                           onclick="anyFileUploader('citizenship_front')">
                    <input type="hidden" id="citizenship_front_path" name="citizenship_front" class="form-control"
                           value="{{isset($data)?$data->citizenship_front:''}}"/>
                    {!! $errors->first('image', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>

            <div class="col-lg-4">
                <label>Citizenship Back Image</label>
                <div class="col-md-12 col-lg-12">
                    @if(isset($data))
                        <img src="{{url(isset($data)?$data->getCitizenshipBackImage():imageNotFound())}}" height="250"
                             id="citizenship_back_img">

                    @else
                        <img src="{{isset($data)?$data->getCitizenshipBackImage():imageNotFound()}}" height="250"
                             id="citizenship_back_img">
                    @endif
                </div>

                <div class="form-group col-md-12 col-lg-12">
                    <small>Below 1 mb</small><br>
                    <small id="citizenship_back_help_text" class="help-block"></small>
                    <div class="progress progress-striped active" role="progressbar" aria-valuemin="0"
                         aria-valuemax="100"
                         aria-valuenow="0">
                        <div id="citizenship_back_progress" class="progress-bar progress-bar-success"
                             style="width: 0%">
                        </div>
                    </div><br>
                    <input type="file" id="citizenship_back_image" name="citizenship_back_image"
                           onclick="anyFileUploader('citizenship_back')">
                    <input type="hidden" id="citizenship_back_path" name="citizenship_back" class="form-control"
                           value="{{isset($data)?$data->citizenship_back:''}}"/>
                    {!! $errors->first('image', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>

            <div class="col-lg-4">

                <label>Signature  Image </label>
                <div class="col-md-8 col-lg-8">
                    @if(isset($data))
                        <img src="{{url(isset($data)?$data->getSignatureImage():imageNotFound())}}" height="250" width="300"
                             id="signature_img">

                    @else
                        <img src="{{isset($data)?$data->getSignatureImage():imageNotFound()}}" height="250" width="300"
                             id="signature_img">
                    @endif
                </div>

                <div class="form-group col-md-12 col-lg-12">
                    <small>Below 1 mb</small><br>
                    <small id="signature_help_text" class="help-block"></small>
                    <div class="progress progress-striped active" role="progressbar" aria-valuemin="0"
                         aria-valuemax="100"
                         aria-valuenow="0">
                        <div id="signature_progress" class="progress-bar progress-bar-success"
                             style="width: 0%">
                        </div>
                    </div><br>
                    <input type="file" id="signature_image" name="signature_image"
                           onclick="anyFileUploader('signature')">
                    <input type="hidden" id="signature_path" name="signature_image" class="form-control"
                           value="{{isset($data)?$data->signature_image:''}}"/>
                    {!! $errors->first('image', '<div class="text-danger">:message</div>') !!}
                </div>
            </div>

        </div>



    </div>

    @include('admin.website.qualification.slc')
    @include('admin.website.qualification.plus-two')
    @include('admin.website.qualification.bachelor')


</div>
<form method="POST" action="#">
 @csrf
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

</form>

@push('scripts')
@include('admin.parties.common.file-upload')
    
@endpush

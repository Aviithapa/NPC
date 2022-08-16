@extends('admin.layout.app')

  

@section('content')

  <!-- Content Header (Page header) -->
  <div class="content-header sty-one">
    <h1>Student Dashboard</h1>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><i class="fa fa-angle-right"></i> Student Dashboard</li>
    </ol>
  </div>
  
  <!-- Main content -->
  <div class="content">
   

  </div>

  <div class="modal show"  role="dialog" style="display: block"  >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 style="font-weight: bold; color: red; font-size: 16px; line-height: 20px; text-align: center;">कृपया आफ्नो दर्ता हुन चाहेको कार्यक्रम (बिषय) चयन गर्नुहोस ।   Please select the program name.</h3>
            </div>

            <div class="modal-body">
                {{-- <form method="POST" action="#">
                    @csrf --}}
                    <div class="col-lg-12">
                        <fieldset class="form-group">
                            <label>कार्यक्रम नाम / Program Name</label>
                            <select class="form-control" name="program_name" id="program"   required>
                                <option value="">Select Program</option>
                                <option value="Diploma in Pharmacy">Diploma in Pharmacy</option>
                                <option value="Bachelor in Pharmacy">Bachelor in Pharmacy</option>

                            </select>
                        </fieldset>
                    </div>
                    <a href={{ url('student/dashboard/application/create') }}><button type="submit" class="btn btn-primary float-right" onclick="$('.modal').css('display','none')" class="close" data-dismiss="modal" ><i class="fa fa-check"></i> Save </button></a>
                {{-- </form> --}}
            </div>
        </div>
    </div>
</div>

@endsection
<script>
  console.log("hello");
  $( document ).ready(function() {

      if(localStorage.getItem('popState') != 'shown'){
          $("#popup").delay(2000).fadeIn();
          console.log("you are pop");
          localStorage.setItem('popState','shown')
      }

      $('#popup-close, #popup').click(function(e) // You are clicking the close button
      {
          $('#popup').fadeOut(); // Now the pop up is hiden.
      });
  });
  window.onload(function() {

  });



</script>
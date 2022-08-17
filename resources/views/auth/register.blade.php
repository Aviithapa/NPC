<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="css/login_regis.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://www.google.com/recaptcha/api.js" async defer ></script>
  </head>
<body>
    
  <div class="container" id="container">
    <form action="{{route('register')}}" method="POST">
      @csrf
    <div class="register-container">
    <div class="card">
      <!-- @error('error')
      <p class="alert alert-danger error_msg" id="error_msg">{{$message}}</p>
      @enderror -->
      <h3><div class="card-header">Register here...</div></h3>
   <div class="card-body">
   <div class="form-group">
      <label for="username">User Name:</label>
      <input type="text" class="form-control" name="name" id="username">
      @error('name') 
      <p class="err alert alert-danger">{{$message}}</p> 
      @enderror   
    </div>

      <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" id="email">
      @error('email') 
      <p class="err alert alert-danger">{{$message}}</p> 
      @enderror  
    </div>

      <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="number" class="form-control" name="phone" id="phone">
      @error('phone') 
      <p class="err alert alert-danger">{{"Must be equal to 10 digits !"}}</p> 
      @enderror  
    </div>

      <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="password" id="pwd">
      @error('password') 
      <p class="err alert alert-danger">{{$message}}</p> 
      @enderror  
    </div>

      <div class="form-group">
      <label for="cpwd">Confirm Password:</label>
      <input type="password" class="form-control" name="password_confirmation" id="cpwd">
      @error('cpassword') 
      <p class="err alert alert-danger">{{$message}}</p> 
      @enderror  
    </div>
<br />
    <div class="g-recaptcha" data-sitekey="{{env('site_key')}}"></div>

@if(Session::has('g-recaptcha-response'))
       <p class="alert {{Session::get('alert-class', 'alert-info')}}" >
        {{Session::get('g-recaptcha-response')}}
       </p>
       @endif

      <button type="submit" class="btn btn-primary">Submit</button>
   </div>
  </div>  
      
    </div>
    </form>  
  </div>
    

</body>
</html>
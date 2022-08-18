<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="/css/login_regis.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    
  <div class="container" id="container">
    <form action="{{route('admin.login')}}" method="POST">
      @csrf
    <div class="login-container">
      
    <div class="card">
      @if(Session::has('verify_via_email'))
      <h3 class="alert alert-info" >
      {{Session::get('verify_via_email')}}
      </h3>
      @endif
      @error('error')
      <p class="alert alert-danger error_msg" id="error_msg">{{$message}}</p>
      @enderror
      <h3><div class="card-header">Login here...</div></h3>
   <div class="card-body">
   <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" id="email">
      </div>

      <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="password" id="pwd">
      </div>

      <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
   </div>
  </div>  
      
    </div>
    </form>  
  </div>
    

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link href="/css/style.css" rel="stylesheet" type="text/css" />
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
</head>
<body>
<div class="main">
    <div class="left-side">
            <button class="open">></button>
            <button class="close none"><</button>
            <div class="left-side-contents none">
          <div class="left-side-menus">      
                    <div class="left-side-anchors"><a href="/dashboard/{{Auth::user()->name}}" id="user_cred" >User Credentials</li></div>
                    <div class="left-side-anchors"><a href="/dashboard/{{Auth::user()->name}}/change_password" id="chng_pwd" class="active" >Change Password</a></div>
                    <div class="left-side-anchors"><a href="/dashboard/{{Auth::user()->name}}/change_email" id="chng_email" class="" >Change Email</a></div>
                    </div>
            </div>
        </div>
        
        <div class="right-side">
        <table>
                
                <caption class="caption">Change Password:</caption>
                <form action="{{ url('/dashboard/'.Auth::user()->name.'/change_password') }}" method="POST">
      @csrf

                <tr class="table_row">
                    <th class="table_heading">Current Password: </th>
                    <td class="table_data"><input type="password" class="form-control" name="cpassword" id="cpwd"></td>
                    @error('cpassword') 
                    <tr class="table_row">
                        <th class="table_heading"> </th>
                    <td class="table_data"><p class="err alert alert-danger">{{$message}}</p></td>
                   </tr> 
                    @enderror
                </tr>
                <tr class="table_row">
                    <th class="table_heading">New Password: </th>
                    <td class="table_data"><input type="password" class="form-control" name="new_password" id="npwd"></td>
                    @error('new_password') 
                    <tr class="table_row">
                        <th class="table_heading"> </th>
                        <td class="table_data"><p class="err alert alert-danger">{{$message}}</p></td>
                    </tr>
                    @enderror
                </tr>
                <tr class="table_row">
                    <th class="table_heading">Confirm Password: </th>
                    <td class="table_data"><input type="password" class="form-control" name="new_password_confirmation" id="ncpwd"></td>
                    @error('password_confirmation') 
                    <tr class="table_row">
                        <th class="table_heading"> </th>
                        <td class="table_data"><p class="err alert alert-danger">{{$message}}</p></td>
                    </tr>
                    @enderror
                </tr>
                <tr class="table_row">
                    <th class="table_heading"></th>
                    <td class="table_data"><button type="submit" class="btn btn-primary">Submit</button></td>
                </tr>
                @if(Session::has('success'))
                <tr class="table_row">
                    <th class="table_heading"> </th>
                    <td class="table_data">
                    <h3 class="success alert alert-info" >
                    {{Session::get('success')}}
                    </h3>    
                    </td>
                    </tr>
                @endif

                @error('error')
                <th class="table_heading"> </th>
                    <tr class="table_row">
                    <td>
                    <p class="alert alert-danger err" id="error_msg">{{$message}}</p>
                    </td>
                    </tr>
                @enderror
                
</form>
            </table>


</div>
            
</div>

<script src="/js/style.js" type="text/javascript"></script>
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Email</title>
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
                    <div class="left-side-anchors"><a href="/dashboard/{{Auth::user()->name}}/change_password" id="chng_pwd" >Change Password</a></div>
                    <div class="left-side-anchors"><a href="/dashboard/{{Auth::user()->name}}/change_email" id="chng_email" class="active" >Change Email</a></div>
                    </div>
            </div>
        </div>
        
        <div class="right-side">
        <table>
                <caption class="caption">Change Email:</caption>
                <form action="{{ url('/dashboard/'.Auth::user()->name.'/change_email') }}" method="POST">
      @csrf

                <tr class="table_row">
                    <th class="table_heading">Replace Email </th>
                    <td class="table_data"><input type="email" class="form-control" name="email" id="email"></td>
                </tr>
                
                <tr class="table_row">
                    <th class="table_heading"> </th>
                    <td class="table_data"><button type="submit" class="btn btn-primary">Submit</button></td>
                </tr>
</form>
            </table>


</div>
            
</div>

<script src="/js/style.js" type="text/javascript"></script>
</body>
</html>



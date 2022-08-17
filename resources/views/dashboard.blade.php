<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="main">
    <div class="left-side">
            <button class="open">></button>
            <button class="close none"><</button>
            <div class="left-side-contents none">
          <div class="left-side-menus">      
                    <div class="left-side-anchors"><a href="/dashboard/{{Auth::user()->name}}" id="user_cred" class="active">User Credentials</li></div>
                    <div class="left-side-anchors"><a href="/dashboard/{{Auth::user()->name}}/change_password" id="chng_pwd" class="" >Change Password</a></div>
                    <div class="left-side-anchors"><a href="/dashboard/{{Auth::user()->name}}/change_email" id="chng_email" class="" >Change Email</a></div>
                    </div>
            </div>
        </div>
        
        <div class="right-side">
            <!-- <div id="right-side-contents"> -->
            <table>
                <caption class="caption">User Credentials:</caption>

                <tr class="table_row">
                    <th class="table_heading">Username: </th>
                    <td class="table_data">{{Auth::user()->name}}</td>
                </tr>
                <tr class="table_row">
                    <th class="table_heading">Email: </th>
                    <td class="table_data">{{Auth::user()->email}}</td>
                </tr>
            </table>
            
            <!-- </div> -->
</div>
            
</div>

<script src="/js/style.js" type="text/javascript"></script>
</body>
</html>
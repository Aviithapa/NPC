<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="/css/style.css" rel="stylesheet" type="text/css" />

</head>
<body>
    @section('test')
    <h2>Welcome to Dashboard, {{Auth::user()->name}} !</h2>
    <hr />
    @endsection
    
    
    <script src="/js/style.js" type="text/javascript"></script>
</body>
</html>
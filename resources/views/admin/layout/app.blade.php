<!DOCTYPE html>
<html>
 <head>
    <link rel='icon' href="" type="image/x-icon" />
    <title>NPC</title>

    @include('admin.layout.style')
    @include('admin.layout.script')
    @stack('style')
 </head>
 <body class="skin-blue sidebar-mini">
    <div class="wrapper boxed-wrapper">
        @include('admin.layout.header')
        @include('admin.sidebar.student')
        <div class="content-wrapper"> 
            @yield('content')
        </div>
        @include('admin.layout.footer')
    </div>
</body>
  
 {{-- <body class="skin-blue sidebar-mini">
    <div class="wrapper boxed-wrapper">
     {{-- @include('admin.layout.header') --}}
        {{-- @switch($authUser->mainRole()->name)
            @case('student')
                @include('admin.sidebar.student')
                @break
            @case('officer')
                @include('admin.sidebar.officer')
                @break
            @default
                
        @endswitch --}}
        {{-- @yield('content') --}}
     {{-- @include('admin.layout.footer')
    </div>
 </body> --}}
</html>
<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.header')
@yield('css')
</head>
<body>
@yield('sidebar')
<div style="padding-top: 2.22%;">
    @yield('poster')
</div>

@include('layouts.flash')
<div class="" style="margin-left: 170px;padding-top: 5%;padding-bottom: 10%;">
    
    @yield('content')
</div>
</body>
    @include('layouts.footer')
</html>                                		                            

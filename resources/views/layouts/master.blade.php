<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.header')
@yield('css')
</head>
<body>
@yield('sidebar')
@yield('poster')
<div class="warning" style="margin-left: 170px;padding-top: 50px;">
    @include('layouts.flash')
    @yield('content')
</div>
</body>
    @include('layouts.footer')
</html>                                		                            

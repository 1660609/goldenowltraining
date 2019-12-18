<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.header')
@yield('css')
</head>
<body>
@include('layouts.sidebar')

<div class="warning" style="margin-left: 170px;padding-top: 50px;">
    @include('layouts.flash')
    @yield('content')
</div>
</body>
</html>                                		                            

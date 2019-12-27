@section('title')
    Product App
@endsection

<div  class="header">
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark" style="position: fixed;width: 100%;padding: 0px;z-index: 997;height:67px">
    
  <a class="navbar-brand" href="/" style="font-size:xx-large;"> <img src="/upload/icon/icon_app.jpg" style="width: 55px;height: 50px;">Products App</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
    <form class="form-inline my-2 my-lg-0" action="{{route('search.index')}}" method="get" style="margin-left: 180px;">
    @csrf
        <input class="form-control mr-sm-2" type="search" name="key" placeholder="Search" value="{{$key ?? ''}}" style="width: 800px;" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            
            <a href="{{route('cart.index')}}" style="height: 50px;margin-top: 8px;" class="notification">
                <img src="/upload/icon/cart.png" width="40px" height="40px">
                <span class="badge">{{$countCart ?? ''}}</span>
            </a>
      
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        @if(isset(Auth::user()->profile->avatar))
                        <img src="/upload/avatar/{{Auth::user()->profile->avatar}}" class="img-circle" style="width: 50px;height: 50px;text-align: center;">
                        @else
                        <img src="/upload/avatar/default.jpg}}" class="img-circle" style="width: 50px;height: 50px;text-align: center;">
                        @endif
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a  class="dropdown-item" href="{{route('profile.edit',Auth::user()->id)}}" >
                        
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
    </div>
</nav>
</nav>
</div>

<div class="sidenav" style="background-color:white;">
    <!--Navbar-->
<nav class="navbar navbar-light light-blue lighten-4">
    <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
      aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">Menu <span class="dark-blue-text"><i
          class="fas fa-bars fa-1x"></i></span></button>
  
    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent1">
  
      <!-- Links -->
      <ul class="navbar-nav mr-auto" style="background-color: lightblue;width: 190px;">
        @foreach($category as $cate)
        <li class="nav-item active">
            <a href="{{route('categoryList.show',$cate->id)}}">{{$cate->name}}<span class="sr-only">(current)</span></a>
        </li>
        @endforeach
      </ul>
      <!-- Links -->
  
    </div>
    <!-- Collapsible content -->
  
  </nav>
  <!--/.Navbar-->
</div>
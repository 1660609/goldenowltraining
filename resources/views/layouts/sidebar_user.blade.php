@section('title')
    Product App
@endsection
<div  class="header">
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark" style="position: fixed;width: 100%;padding: 0px;z-index: 999;height:67px">
    
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
                        
                        <img src="/upload/avatar/{{Auth::user()->profile->avatar}}" class="img-circle" style="width: 50px;height: 50px;text-align: center;">
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
        
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  </div>
</nav>
</div>
<div class="sidenav" style="margin-top: 69px;width: 11.8%;background-color:lightskyblue;text-align: center;">
    <h1>Menu</h1>
    @foreach($category as $cate)
    <hr with="100%" >
    <a href="{{route('categoryList.show',$cate->id)}}">{{$cate->name}}</a>
    @endforeach
  </div>
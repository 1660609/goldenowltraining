@extends('layouts.master')
@section('sidebar')
    @include('layouts.sidebar_user')
@endsection
@section('poster')
  @include('layouts.poster')
@endsection
@section('content')
<div style="margin-top: 200px;margin-left: 180px;">
    <h2 style="margin-left: -110px;">Sản phẩm nỗi bật</h2>
    <hr style="width: 100%;border: darkblue;">
    <div style="margin-left: -130px;display: flex; flex-direction: row;width:1480px;height:auto;flex-wrap: wrap;">
    @foreach($product as $pro)
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="/upload/thumbnail/{{$pro->thumbnail}}" style="width: 285px;height: 250px;" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"><a href="{{route('productApp.show',$pro->id)}}">{{$pro->name}}</a></h5>
        <p class="card-text">{{$pro->description}}</p>
        <p class="card-text">{{number_format($pro->price,3) }} VND</p>
      </div>
    </div>
    @endforeach
    </div>
</div>

@endsection
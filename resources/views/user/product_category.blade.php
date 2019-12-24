@extends('layouts.master')
@section('sidebar')
    @include('layouts.sidebar_user')
@endsection

@section('content')
<img src="/upload/banner/{{$category->banner}}" width="100%" style="margin-left: 50px;margin-right: 5px;">
<div style="margin-top: 30px;margin-left: 180px;">
    <h2 style="margin-left: -110px;">Danh sách sản phẩm</h2>
    <hr style="width: 100%;border: darkblue;">
    <div style="margin-left: -130px;display: flex; flex-direction: row;width:1480px;height:auto;flex-wrap: wrap;">
    @foreach($category->product as $pro)
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="/upload/thumbnail/{{$pro->thumbnail}}" style="width: 285px;height: 250px;" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"><a href="{{route('productApp.show',$pro->id)}}">{{$pro->name}}</a></h5>
        <p class="card-text">{{$pro->description}}</p>
        <p class="card-text">{{$pro->price}}</p>
        <a href="#" class="btn btn-primary">+ Add</a>
        <a href="#" class="btn btn-primary">+ Buy</a>
      </div>
    </div>
    @endforeach
    </div>
</div>

@endsection
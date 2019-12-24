@extends('layouts.master')
@section('sidebar')
    @include('layouts.sidebar_user')
@endsection
@section('content')
<div style="margin-top: 200px;margin-left: 180px;">
  <form class="form-inline my-2 my-lg-0" action="{{route('search.index')}}" method="get" style="margin-left: 180px;float:right;">
    @csrf
        <input class="form-control mr-sm-2" type="number" name="keyPrice" placeholder="Price" value="{{$keyPrice ?? ''}}">
       
        <select class="form-control" id="exampleFormControlSelect1" name="keyCate" aria-placeholder="kkkkkkkkkkk">
          <option>{{$keyCate ?? ''}}</option>
          @foreach($category as $cate)
          <option value="{{$cate->id}}">
              {{$cate->name}}
          </option>
          @endforeach
        </select>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Filter</button>
    </form>
    <h2 style="margin-left: -110px;">Sreach Result: {{$key}}</h2>
    <!-- <section name="keyCate" class="form-control">
        
    </section> -->
    <hr style="width: 100%;border: darkblue;">
    <div style="margin-left: -130px;display: flex; flex-direction: row;width:1480px;height:auto;flex-wrap: wrap;">
    @foreach($product as $pro)
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
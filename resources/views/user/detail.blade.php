@extends('layouts.master')
@section('sidebar')
    @include('layouts.sidebar_user')
@endsection
@section('css')
<style>
div.scrollmenu {
  background-color: lightcyan;
  overflow: auto;
  flex-wrap: nowrap;
  white-space: nowrap;
}

div.scrollmenu a {
  display: inline-block;
  color: darkslateblue;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}
</style>
@endsection
@section('poster')
    @include('layouts.poster')
@endsection
@section('content')
<div style="width: 100%;height: 700px;background-color:lightpink;margin-left: 50px;margin-top: 200px;">
<h2 style="margin-left: 5px;">Thông tin sản phẩm</h2>
<div class="col-md-5" style="padding-left: 100px;flex-wrap: wrap;">
<section class="panel">
      <div class="panel-body">
          <div class="col-md-9" style="float: left;">
              <div class="pro-img-details">
                  <img src="/upload/thumbnail/{{$product->thumbnail}}" class="img-thumbnail" style="width: 400px;height: 400px;" alt="">
              </div>
              <div class="pro-img-list" style="text-align: center;">
                  @foreach($product->galleries as $gallery)
                  <a href="/upload/gallery/{{$gallery->gallery_path}}">
                      <img src="/upload/gallery/{{$gallery->gallery_path}}" width="90px" alt="">
                  </a>
                  @endforeach
              </div>
          </div>
  </section>
  </div>
  <div class="col-md-6">
    <h4 class="pro-d-title">
        <a href="{{route('productApp.show',$product->id)}}" class="">
            {{$product->name}}
        </a>
    </h4>
    <p>
        {{$product->content}}
    </p>
    <div class="product_meta">
        <span class="posted_in"> <strong>Categories:</strong> 
            <a rel="tag" href="{{route('categoryList.show',$product->category_id)}}">{{$product->category->name}}</a>
    </div>
    <div class="m-bot15"> <strong>Price : </strong> <span class="amount-old">{{number_format($product->price,3) }} </span><strong>VND </strong>  </div>
    <form action="{{route('cart.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label>Quantity : </label>
        <input type="number" name="number" value="1" min="0">
    </div>
        <input type="hidden" value="{{$product->price}}" name="price" >
        <input type="hidden" value="{{$product->id}}" name="id" >
        <button class="btn btn-round btn-danger" type="submit">Add to Cart</button>
    </form>
    <button class="btn btn-round btn-success" type="button">Buy Product</button>
</div>

</div>
</div>
        <div class="container"> 
  
            <h1 style="text-align:center;color:green;">  
            See More
        </h1> 
            <div  class="scrollmenu"> 
                <div class="row flex-row flex-nowrap"> 
                    @foreach($seeMore as $sm)
                    <div class="card col-12 col-sm-6 col-md-4 col-lg-3" style="width: 300px;" >
                        <a href="{{route('productApp.show',$sm->id)}}">
                        <img class="card-img-top" src="/upload/thumbnail/{{$sm->thumbnail}}" style="height: 250px;" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$sm->name}}</h5>
                            <p class="card-text">{{$sm->description}}</p>
                            <p class="card-text">{{$sm->price}}</p>
                            <form action="{{route('cart.store')}}" method="POST">
                            @csrf
                            <input type="number" name="number" value="1" min="0" hidden>
                            <input type="hidden" value="{{$sm->price}}" name="price" >
                            <input type="hidden" value="{{$sm->id}}" name="id" >
                            <button class="btn btn-primary" style="float: left;" type="submit">Add to Cart</button>
                            </form>
                        </div>
                    </a>
                        </div>
                    @endforeach
                </div> 
            </div> 
        </div> 
        
@endsection
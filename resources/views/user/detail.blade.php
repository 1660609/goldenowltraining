@extends('layouts.master')
@section('sidebar')
    @include('layouts.sidebar_user')
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
    <p>
            <input type="hidden" value="{{$product->price}}" name="price" >
            <input type="hidden" value="{{$product->id}}" name="id" >
            <button class="btn btn-round btn-danger" type="submit">Add to Cart</button>
    </form>

        <button class="btn btn-round btn-success" type="button"><i class="fa fa-shopping-cart"></i> Buy Product</button>
    </p>
</div>
</div>
</div>
@endsection
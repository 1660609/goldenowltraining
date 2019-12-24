<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width: 88%;float: right; margin-top: 30px;">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="/upload/poster/post1.jpg" style=" height: 250px">
          </div>
        @for($i = 2 ;$i < 5;$i++)
      <div class="carousel-item">
        <img class="d-block w-100" src="/upload/poster/post{{$i}}.jpg" style="height: 250px;">
      </div>
      @endfor
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
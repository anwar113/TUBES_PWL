@extends('master')
@section('content')
<body>
<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('img/men8.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>MEN</h3>
            <p>Pakaian untuk pria.</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('img/women1.webp')">
          <div class="carousel-caption d-none d-md-block">
            <h3>WOMEN</h3>
            <p>Pakaian untuk wanita.</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('img/kids1.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>KIDS</h3>
            <p>Pakaian untuk anak-anak.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <h1 class="my-4" align="center">Produk Terbaru</h1>

    <div class="row">
    @foreach($baru as $b)
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="{{asset('storage/'.$b->gambar)}}" alt="" width="300" height="400"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">{{$b->nama}}</a>
            </h4>
            <p class="card-text">Rp. {{$b->harga}}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <!-- /.container -->
</body>
@endsection

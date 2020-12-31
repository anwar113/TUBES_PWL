@extends('master')
@section('content')
<body>
  <div class="container">

    <!-- Men -->
    <h1 class="my-4">Kategori Men</h1>
    <div class="row">
    @foreach($men as $m)
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="{{asset('storage/'.$m->gambar)}}" alt="" width="300" height="400"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">{{$m->nama_produk}}</a>
            </h4>
            <p class="card-text">Rp. {{$m->harga}}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>

    <!-- Women -->
    <h1 class="my-4">Kategori Women</h1>
    <div class="row">
    @foreach($women as $w)
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="{{asset('storage/'.$w->gambar)}}" alt="" width="300" height="400"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">{{$w->nama_produk}}</a>
            </h4>
            <p class="card-text">Rp. {{$w->harga}}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>

    <!-- Kids -->
    <h1 class="my-4">Kategori Kids</h1>
    <div class="row">
    @foreach($kid as $k)
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="{{asset('storage/'.$k->gambar)}}" alt="" width="300" height="400"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">{{$k->nama_produk}}</a>
            </h4>
            <p class="card-text">Rp. {{$k->harga}}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>


  </div>
</body>
@endsection
@extends('master')
@section('content')
<script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

<!-- Bootstrap core CSS -->
<link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="/css/modern-business.css" rel="stylesheet">
</head>

<br></br>
<div class="container">
<div class="row row-cols-1 row-cols-md-3">
@foreach($men as $barang)
  <div class="col mb-4">
    <div class="card h-100">
    <img src="{{asset('storage/'.$barang->gambar)}}" class="card-img-top" alt="...">
        <div class="card-body">
        <p class="card-text">
        <strong>{{$barang->nama_produk}}</strong>
        <br>
        <strong>Harga :</strong> {{$barang->harga}}
        <hr>
        <p>SIZE :</strong> {{$barang->ukuran}}</p>
        <p>STOK :</strong> {{$barang->stok}}</p>
        <strong>Keterangan :</strong>
        {{ $barang->keterangan}}
        </p>
          <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          <br></br>
          <a href="/men/bajupendek/transaksi/{{$barang->id}}" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> beli</a>
      </div>
    </div>
  </div>
  @endforeach
  &nbsp;&nbsp;&nbsp;<h5><a href="/komen1" class="btn btn-primary"> Komentar</a>
   <br>
   <br>
  </div>
  </div>

@endsection
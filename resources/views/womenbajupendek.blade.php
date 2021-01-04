@extends('master')
@section('content')
<br></br>
<div class="container">
<div class="row row-cols-1 row-cols-md-3">
@foreach($women as $barang)
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
          <a href="/women/bajupendek/transaksi/{{$barang->id}}" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> beli</a>
      </div>
    </div>
  </div>
  @endforeach
  <br>
   <br>
  <p>
  <p>
  &nbsp;&nbsp;&nbsp;<h5><a href="/komen5" class="btn btn-primary"> Komentar</a>
   </p>
   <br>
  </div>
  </div>
@endsection

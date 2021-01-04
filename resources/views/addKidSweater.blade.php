@extends('master')
@section('content')
<!-- Bootstrap core CSS -->
<link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="../../css/modern-business.css" rel="stylesheet">
<body>
    <br><br>
    <div>
    </div>
    <div class="conainer" align="center">
        <font><h1 align="center">Beli Barang</h1></font>
        <div class="row">
            <div class="card my-8">
                <div class="row" >
                    <div class="col-lg-8">
                    <img width="150px" src="{{asset('storage/'.$kid->gambar)}}">
                    </div> 
                    <div class="col-lg-4" align="left">
                        <p>Nama Produk :{{$kid->nama_produk}}</p><br>
                        <p>Harga       :{{$kid->harga}}</p><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
                                      <div class="col-lg-8" >
                        <section class="page-section bg-light">
                                <form action="/kid/transaksi/create" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id_produk" value="{{$kid->id}}"><br>
                                    <input type="hidden" name="nama_produk" value="{{$kid->nama_produk}}">
                                    <input type="hidden" name="kategori_produk" value="Kid">
                                    <input type="hidden" name="gambar" value="{{$kid->gambar}}">
                                    <input type="hidden" name="harga" value="{{$kid->harga}}">
                                    <input type="hidden" name="status" value="Pending">
                                    <input type="hidden" name="total_harga" value="0">
                                    <br/>
                                    <div class="form-group">
                                        <label for="nama_pembeli">Nama Pembeli</label>
                                        <input type="text" class="form-control" name="nama_pembeli">
                                        <br/>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_telepon_pembeli">No Telepon</label>
                                        <input type="text" class="form-control" name="no_telepon_pembeli">
                                        <br/>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat_pembeli">Alamat</label>
                                        <textarea type="text" class="form-control" name="alamat_pembeli"></textarea>
                                        <br/>
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah_beli">Jumlah barang</label>
                                        <input type="text" class="form-control" name="jumlah_beli">
                                        <br/>
                                    </div>
                                    <div class="form-group">
                                        <label for="ukuran">Ukuran</label>
                                        <input type="text" class="form-control" name="ukuran">
                                        <br/>
                                    </div>
                                    <button type="submit" name="edit" class="btn btn-success"><i class="fas fa-succes"></i> Beli</button>
                                    <a class="btn btn-success" href="{{url('/kidsweater')}}"><i class="fas fa-arrow-left"></i> Kembali</a>
                                </form>
                        </section>
                    </div>  
        </div>

    </div>
    <br><br>
</body>
@endsection
@extends('master')
@section('content')
<!-- Bootstrap core CSS -->
<link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="../../css/modern-business.css" rel="stylesheet">
<body>
    <br><br>
  <section class="page-section bg-light">
            <font><h1 align="center">FORM EDIT DATA</h1></font>
            <form action="/kid/update/{{$kid->id}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$kid->id}}">
                <br/>
                <div class="form-group">
                    <label for="nama_produk">Nama</label>
                    <input type="text" class="form-control" name="nama_produk" value="{{$kid->nama_produk}}">
                    <br/>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea type="text" class="form-control" name="keterangan">{{$kid->keterangan}}</textarea>
                    <br/>
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" name="harga" value="{{$kid->harga}}">
                    <br/>
                </div>
                <div class="form-group">
                    <label for="jenis">Jenis</label>
                    <select class="form-control" name="jenis">
                      <option value="Kaos lengan pendek">Kaos lengan pendek</option>
                      <option value="Kaos lengan panjang">Kaos lengan panjang</option>
                      <option value="Sweater">Sweater</option>
                      <option value="Jaket">Jaket</option>
                      <option value="Gamis">Gamis</option>
                    </select>
                    <br/>
                </div>
                <div class="form-group">
                    <label for="ukuran">Ukuran &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="checkbox" name="ukuran[]" value="S"> S &nbsp;&nbsp;
                    <input type="checkbox" name="ukuran[]" value="M"> M &nbsp;&nbsp;
                    <input type="checkbox" name="ukuran[]" value="L"> L &nbsp;&nbsp;
                    <input type="checkbox" name="ukuran[]" value="XL"> XL &nbsp;&nbsp;
                    <input type="checkbox" name="ukuran[]" value="XXL"> XXL &nbsp;&nbsp;
                    <input type="checkbox" name="ukuran[]" value="XXXL"> XXXL
                    <br/>
                </div>
                <div class="form-group">
                    <label for="stok">Stok</label>
                    <input type="text" class="form-control" name="stok" value="{{$kid->stok}}">
                    <br/>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" class="form-control" required="required" name="gambar" value="{{$kid->gambar}}">
                    <img width="150px" src="{{asset('storage/'.$kid->gambar)}}">
                    <br/>
                </div>
                <button type="submit" name="edit" class="btn btn-success"><i class="fas fa-edit"></i> Ubah Data</button>
                <a class="btn btn-success" href="{{url('/kid')}}"><i class="fas fa-arrow-left"></i> Kembali</a>
            </form>
        </section>
        <br><br>
</body>
@endsection
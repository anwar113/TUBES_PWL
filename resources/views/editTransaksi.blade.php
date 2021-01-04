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
            <form action="/updateTransaksi/{{$transaksi->id}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$transaksi->id}}">
                <input type="text" class="form-control" name="nama_pembeli" value="{{$transaksi->nama_pembeli}}">
                <input type="text" class="form-control" name="no_telepon_pembeli" value="{{$transaksi->no_telepon_pembeli}}">
                <input type="text" class="form-control" name="jumlah_beli" value="{{$transaksi->jumlah_beli}}">
                <br/>
                <div class="form-group">
                    <label for="no_telepon_pembeli">No Telepon Pembeli</label>
                    <input type="text" class="form-control" name="Status" value="{{transaksi->Status}}">
                    <br/>
                </div>
                <button type="submit" name="edit" class="btn btn-success"><i class="fas fa-edit"></i> Ubah Data</button>
                <a class="btn btn-success" href="{{url('/manageTransaksi')}}"><i class="fas fa-arrow-left"></i> Kembali</a>
            </form>
        </section>
        <br><br>
</body>
@endsection 
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Online Shop || E-Commerce</title>

  <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

    <center>
            <h5>Laporan Data Transaksi</h5>
        </center>
        <br>

        <table class="table-bordered">
        <thead>
            <tr>
                <th width="200">Nama Produk</th>
                <th width="200">Kategori Produk</th>
                <th width="400">Gambar</th>
                <th width="200">Harga</th>
                <th width="200">Nama Pembeli</th>
                <th width="200">No Telepon</th>
                <th width="200">Alamat</th>
                <th width="200">Jumlah Pembelian</th>
                <th width="200">Ukuran</th>
                <th width="200">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transaksi as $t)
		    <tr>
                <td>{{$t->nama_produk}}</td>
                <td>{{$t->kategori_produk}}</td>
                <td><img width="150px" src="{{asset('storage/'.$t->gambar)}}"></td>
                <td>{{$t->harga}}</td>
                <td>{{$t->nama_pembeli}}</td>
                <td>{{$t->no_telepon_pembeli}}</td>
                <td>{{$t->alamat_pembeli}}</td>
                <td>{{$t->jumlah_beli}}</td>
                <td>{{$t->ukuran}}</td>
                <td>{{$t->Status}}</td>
                
                <td>
                    <h5><a href="transaksi/edit/{{ $t->id }}" class="badge badge-warning"><i class="fas fa-edit"></i>Update Status</a>
                    <a href="trasaksi/delete/{{ $t->id }}" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a></h5>
                </td>
            </tr>
	        @endforeach
        </tbody>
    </table>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>





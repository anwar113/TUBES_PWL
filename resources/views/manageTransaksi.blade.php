@extends('master')
@section('content')
<body>
  <br><br> 
  <section class="page-section bg-light center">
  <div class="container">
    <div class="tombol float-left">
        <a href="transaksi/add" class="btn btn-success"><i class="fas fa-plus"></i> Tambah Data</a>
        <a href="kid/cetak_pdf" class="btn btn-success" target="_blank"><i class="fas fa-print"></i> Cetak PDF</a>
    </div>
    <br>
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
                <th width="200">Total Harga</th>
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
                <td>{{$t->total_harga}}</td>
                <td>{{$t->status}}</td>
                
                <td>
                    <h5><a href="kid/edit/{{ $t->id }}" class="badge badge-warning"><i class="fas fa-edit"></i> Edit</a>
                    <a href="kid/delete/{{ $t->id }}" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a></h5>
                </td>
            </tr>
	        @endforeach
        </tbody>
    </table>
    </div>
    </section>
    <br><br>
</body>
@endsection

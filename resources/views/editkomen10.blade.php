@extends ('master')
@section('content')
        <!-- Blog Post -->
        <br></br>
<link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="../../css/modern-business.css" rel="stylesheet">
<div class="container">
      <font><h3 align="center">FORM EDIT KOMENTAR</h3></font>
        <form action="/updatekomen10/{{$komen10->id}}" method="post"> 
            {{csrf_field()}} 
            <input type="hidden" name="menbajupendek" value="{{$komen10->id}}"></br> 
            <div class="form-group"> 
                <label for="nama">Nama</label>                 
                <input type="text" class="form-control"required="required" name="nama" value="{{$komen10->nama}}"></br> 
            </div> 
            <div class="form-group"> 
                <label for="nama_produk">Nama Produk</label>                 
                <input type="text" class="form-control" required="required" name="nama_produk" value="{{$komen10->nama_produk}}"></br> 
            </div> 
            <div class="form-group"> 
                <label for="komentar">Komentar</label>                 
                <input type="text" class="form-control" required="required" name="komentar" value="{{$komen10->komentar}}"></br> 
            </div>
            <button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button> 
        </form> 
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
</div>
@endsection
      

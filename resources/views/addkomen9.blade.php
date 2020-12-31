@extends ('master')
@section('content')
        <!-- Blog Post -->
        <br></br>
        <div class="container">
        <font><h3 align="center">FORM TAMBAH KOMENTAR</h3></font>
        <form action="/createkomen9" method="post"> 
            @csrf 
            <div class="form-group"> 
                <label for="nama">Nama</label>                 
                <input type="text" class="form-control" required="required" name="nama"></br> 
            </div> 
            <div class="form-group"> 
                <label for="nama_produk">nama_produk</label>                 
                <input type="text" class="form-control" required="required" name="nama_produk"></br> 
            </div> 
            <div class="form-group"> 
                <label for="komentar">Komentar</label>                 
                <input type="text" class="form-control" required="required" name="komentar"></br> 
            </div>
            <button type="submit" name="add" class="btn btn-primary float-right">Submit Data</button>        
             </form> 
             <br></br>
             </div>
             <br></br>
    <br></br>
    <br></br>
    <br></br>
    <br></br>
@endsection
      

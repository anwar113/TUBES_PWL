@extends ('master')
@section('content')
        <!-- Blog Post -->
        <br></br>
        <div class="container">
        <font><h3 align="center">ULASAN GAMIS WOMEN</h3></font>
        <br>
        <table class="table table-bordered table-striped"> 
     <thead> 
         <tr> 
              <th>Nama</th>  
              <th>Nama Produk</th> 
              <th>Komentar</th>    
              <th>Action</th> 
         </tr> 
     </thead> 
     <tbody> 
         @foreach($komen9 as $a) 
         <tr> 
              <td>{{$a->nama}}</td> 
              <td>{{$a->nama_produk}}</td>
              <td>{{$a->komentar}}</td>
              <td><a href="/editkomen9/{{ $a->id }}" class="btn btn-primary btn-sm">Edit</a> 
                  <br></br>
                  <a href="/deletekomen9/{{ $a->id }}" class="btn btn-primary btn-sm">Hapus</a> 
         </tr> 
         @endforeach 
     </tbody> 
    </table> 
    <br></br>
    <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="/womengamis">&larr; Previously</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="/addkomen9">Tambah Komentar &rarr;</a>
          </li>
        </ul>
    <br></br>
    <br></br>
    <br></br>
    <br></br>
    <br></br>
    </div>
@endsection
      

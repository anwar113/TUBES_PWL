@extends ('master')
@section('content')
        <!-- Blog Post -->
        <br></br>
        <div class="container">
        <font><h3 align="center">FORM TAMBAH KOMENTAR</h3></font>
        <form action="/createUser" method="post"> 
            @csrf 
            <div class="form-group"> 
                <label for="name">Nama</label>                 
                <input type="text" class="form-control" required="required" name="name"></br> 
            </div> 
            <div class="form-group"> 
                <label for="email">Email</label>                 
                <input type="text" class="form-control" required="required" name="email"></br> 
            </div> 
            <div class="form-group"> 
                <label for="roles">Roles</label>                 
                <input type="text" class="form-control" required="required" name="roles"></br> 
            </div>
            <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" class="form-control" name="gambar">
                    <br/>
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
      

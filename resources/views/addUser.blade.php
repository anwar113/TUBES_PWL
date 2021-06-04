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

<!-- Bootstrap core CSS -->
<link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="../../css/modern-business.css" rel="stylesheet">
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.html">E-COMMERCE</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        </ul>
      </div>
    </div>
  </nav>

        <!-- Blog Post -->
        <br></br>
        <div class="container">
        <font><h3 align="center">TAMBAH USER</h3></font>
        <form action="/createUser" method="post"> 
            @csrf 
            <input type="hidden" name="roles" value="User">
<<<<<<< HEAD
            <input type="hidden" name="gambar" value="{{$user->gambar}}">
=======
>>>>>>> b7e07e3f22161a7ce6e4e38a62fa7eba711d1b88
            <div class="form-group"> 
                <label for="name">Nama</label>                 
                <input type="text" class="form-control" required="required" name="name"></br> 
            </div> 
            <div class="form-group"> 
                <label for="email">Email</label>                 
                <input type="text" class="form-control" required="required" name="email"></br> 
            </div> 
            <div class="form-group"> 
                <label for="password">Password</label>                 
                <input type="password" class="form-control" required="required" name="password"></br> 
            </div>
            <button type="submit" name="add" class="btn btn-primary float-right">Submit Data</button>        
             </form> 
             <a class="btn btn-success" href="{{url('/')}}"><i class="fas fa-arrow-left"></i> Kembali</a>
             </form> 
             <br></br>
             </div>
             <br></br>
    <br></br>
    <br></br>
    <br></br>
    <br></br>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; E - COMMERCE 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

      

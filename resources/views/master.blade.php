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

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.html">E-COMMERCE</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{url('/home')}}">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Men
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                    <a class="dropdown-item" href="{{url('/menbajupendek')}}">Kaos Lengan Pendek</a>
                    <a class="dropdown-item" href="{{url('/menbajupanjang')}}">Kaos Lengan Panjang</a>
                    <a class="dropdown-item" href="{{url('/mensweater')}}">Sweater</a>
                    <a class="dropdown-item" href="{{url('/menjaket')}}">Jacket</a>
                </div>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Women
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="{{url('/womenbajupendek')}}">Kaos Lengan Pendek</a>
                <a class="dropdown-item" href="{{url('/womenbajupanjang')}}">Kaos Lengan Panjang</a>
                <a class="dropdown-item" href="{{url('/womensweater')}}">Sweater</a>
                <a class="dropdown-item" href="{{url('/womenjaket')}}">Jacket</a>
                <a class="dropdown-item" href="{{url('/womengamis')}}">Gamis</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Kids
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPages">
                <a class="dropdown-item" href="{{url('/kidsbajupendek')}}">Kaos Lengan Pendek</a>
                <a class="dropdown-item" href="{{url('/kidsbajupanjang')}}">Kaos Lengan Panjang</a>
                <a class="dropdown-item" href="{{url('/kidssweater')}}">Sweater</a>
                <a class="dropdown-item" href="{{url('/kidsjaket')}}">Jacket</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/sale')}}">Sale</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/howToBuy')}}">How to Buy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/baru')}}">Manage Produk Terbaru</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/women')}}">Manage Produk Women</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/men')}}">Manage Produk Men</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/kid')}}">Manage Produk Kid</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/manageTransaksi')}}">Manage Transaksi</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  @yield('content')
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
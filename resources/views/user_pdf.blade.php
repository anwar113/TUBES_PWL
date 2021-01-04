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
            <h5>Laporan Data User</h5>
        </center>
        <br>

        <table class="table-bordered table-striped">
            <thead>
                <tr class="table-secondary">
                    <th width="20">No</th>
                    <th width="70">Nama</th>
                    <th width="100">Email</th>
                    <th width="50">Roles</th>
                    <th width="100">Gambar</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1 @endphp
                @foreach($user as $k)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$k->name}}</td>
                    <td>{{$k->email}}</td>
                    <td>{{$k->roles}}</td>
                    <td><img width="200" src="{{'storage/'.$k->gambar}}"></td>
                </tr>
                @endforeach
            </tbody>
        </table>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

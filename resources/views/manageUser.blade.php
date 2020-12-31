@extends('master')
@section('content')
<body>
  <br><br> 
  <section class="page-section bg-light center">
  <div class="container">
    <div class="tombol float-left">
        <a href="/addUsertransaksi" class="btn btn-success"><i class="fas fa-plus"></i> Tambah Data</a>
        <a href="kid/cetak_pdf" class="btn btn-success" target="_blank"><i class="fas fa-print"></i> Cetak PDF</a>
    </div>
    <br>
    <br>
    <table class="table-bordered">
        <thead>
            <tr>
                <th width="200">Nama User</th>
                <th width="200">Email </th>
                <th width="400">Gambar</th>
                <th width="400">Roles</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($user as $t)
		    <tr>
                <td>{{$t->name}}</td>
                <td>{{$t->email}}</td>
                <td><img width="150px" src="{{asset('storage/'.$t->gambar)}}"></td>
                <td>{{$t->roles}}</td>       
                <td>
                    <h5><a href="/editUser/{{ $t->id }}" class="badge badge-warning"><i class="fas fa-edit"></i> Edit</a>
                    <a href="/deleteUser/{{$t->id}}" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a></h5>
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
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin - Data Role</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Favicon -->
	<link href="{{asset('img/icon.png')}}" rel="shortcut icon"/>
  </head>
  <body>
  <button class="btn btn-danger"><a href="{{ url('blogs') }}" style="text-decoration: none; color: white;">Kembali</a></button>
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Jenis Membership</th>
        <th>Tanggal Daftar</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      
    @foreach($liat as $li)
      <tr>
        <td>{{ $li->name }}</td>
        <td>{{ $li->membership }}</td>
        <td>{{ $li->created_at }}</td>
        <td>{{ $li->email }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  
  </div>    
</html>
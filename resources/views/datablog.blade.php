<!-- index.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin - Data Artikel</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Favicon -->
	<link href="{{asset('img/icon.png')}}" rel="shortcut icon"/>
  </head>
  <body>
  <div class="alert alert-dismissible alert-info">
  <strong>Don't forget to see this info!</strong> this is info about <a href="{{ url('categories') }}" class="alert-link"> Categories</a>, Have Fun And Chillin.
  </div>
    <div class="container">
    <button class="btn btn-success"><a href="{{action('BlogController@create')}}" style="text-decoration: none; color: white;">Tambah Data</a></button>
    <button class="btn btn-info"><a href="{{ url('categories') }}" style="text-decoration: none; color: white;">Kategori</a></button>
    <button class="btn btn-info"><a href="{{ url('role') }}" style="text-decoration: none; color: white;">Role</a></button>
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Foto</th>
        <th>Judul Artikel</th>
        <th>Deskripsi</th>
        <th>Penulis</th>
        <th>Kategori</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($blogs as $blog)
      <tr>
        <td><img src="{{ url('uploads/'.$blog->foto) }}" style="width: 100%;"> </td>
        <td>{{$blog['judul']}}</td>
        <td>{{$blog['deskripsi']}}</td>
        <td>{{$blog['penulis']}}</td>
        <td>{{$blog->categorie['qty']}}</td>
        
        <td><a href="{{action('BlogController@edit', $blog['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('BlogController@destroy', $blog['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  
  </div>    
</html>
<!-- index.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin - Data Gallery</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Favicon -->
	<link href="{{asset('img/icon.png')}}" rel="shortcut icon"/>
  </head>
  <body>
    <div class="container">
    <button class="btn btn-success"><a href="{{action('GalleryController@create')}}" style="text-decoration: none; color: white;">Tambah Gallery</a></button>
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Foto</th>
        <th>Judul</th>
        <th>Deskripsi</th>
        <th colspan="1">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($galleries as $gallery)
      <tr>
        <td><img src="{{ url('uploadsgallery/'.$gallery->foto) }}" style="width: 100%;"> </td>
        <td>{{$gallery['foto']}}</td>
        <td>{{$gallery['judul']}}</td>
        <td>{{$gallery['deskripsi']}}</td>
        
        <td>
          <form action="{{action('GalleryController@destroy', $gallery['id'])}}" method="post">
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
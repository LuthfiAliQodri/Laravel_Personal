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
  <div class="container">
  <button class="btn btn-success"><a href="{{action('CategorieController@create')}}" style="text-decoration: none; color: white;">Tambah Kategori</a></button>
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Kategori</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($categories as $categorie)
      <tr>
        <td>{{$categorie['id']}}</td>
        <td>{{$categorie['qty']}}</td>
        
        <td><a href="{{action('CategorieController@edit', $categorie['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('CategorieController@destroy', $categorie['id'])}}" method="post">
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

  </body>
</html>
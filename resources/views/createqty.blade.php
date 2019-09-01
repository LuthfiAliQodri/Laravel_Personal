<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin - Add Categorie</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Favicon -->
	<link href="{{asset('img/icon.png')}}" rel="shortcut icon"/> 
  </head>
  <body>
    <div class="container">
      <h2>Tambah Kategori Baru</h2><br/>
      <form method="post" action="{{url('categories')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Title">Kategori:</label>
            <input type="text" class="form-control" name="qty">
          </div>
        </div>>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
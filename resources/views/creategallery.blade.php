<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin - Add Gallery</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Favicon -->
	<link href="{{asset('img/icon.png')}}" rel="shortcut icon"/> 
  </head>
  <body>
    <div class="container">
      <h2>Tambah Gallery Baru</h2><br/>
      <form method="post" action="{{url('galleries')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Title">Foto:</label>
            <input type="file" class="form-control" name="foto">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="judul">Judul Artikel:</label>
            <input type="text" class="form-control" name="judul">
          </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="deskripsi">Deskripsi:</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi"rows="3"></textarea>
            </div>
        </div>
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
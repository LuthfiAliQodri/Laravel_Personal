<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin - Add Data</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
    <!-- Favicon -->
	<link href="{{asset('img/icon.png')}}" rel="shortcut icon"/> 
  </head>
  <body>
    <div class="container">
      <h2>Tambah Artikel Baru</h2><br/>
      <form method="post" action="{{url('blogs')}}" enctype="multipart/form-data">
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
            <label for="Title">Judul Artikel:</label>
            <input type="text" class="form-control" name="judul">
          </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Description">Deskripsi:</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi"rows="3"></textarea>
            </div>
        </div>
          
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="qty">Kategori:</label>
            <select name="qty" class="form-control">
                  <option value="1">Travel</option>
                  <option value="2">Music</option> 
                  <option value="3">Politic</option>
                  <option value="4">Sports</option> 
                  <option value="5">Education</option>
                  <option value="6">Tutorial</option> 
                </select>
          </div>
        </div>
        
         <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label>Penulis:</label>
                <input type="text" class="form-control" name="penulis">
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
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/select2.min.js') }}"></script>
  <script>
    $(document).ready(function() {
      $('.select2-multi').select2();
    });
  </script>

</html>
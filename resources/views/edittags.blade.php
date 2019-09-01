<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin - Edit Data Tags  </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Favicon -->
	<link href="{{asset('img/icon.png')}}" rel="shortcut icon"/>
  </head>
  <body>
    <div class="container">
      <h2>Edit Data Tags</h2><br/>
<form method="post" action="{{action('TagController@update', $id)}}">
      @csrf
      <input name="_method" type="hidden" value="PATCH">
      <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="nama_tags">Tags:</label>
            <input type="text" class="form-control" name="nama_tags" value="{{$tag->nama_tags}}">
          </div>
        </div>
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
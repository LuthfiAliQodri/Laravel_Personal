<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Admin - Edit Data Artikel </title>
    <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Favicon -->
    <link href="{{asset('img/icon.png')}}" rel="shortcut icon" />
</head>

<body>
    <div class="container">
        <h2>Edit Data Artikel</h2><br />
        <form role="form" method="post" action="{{action('BlogController@update', $id)}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $blog->id }}">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="Title">Foto:</label>
                    <input type="file" class="form-control" name="foto" value="{{$blog->foto}}">
                </div>
                <input name="_method" type="hidden" value="PATCH">
            </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="Title">Judul Artikel:</label>
                    <input type="text" class="form-control" name="judul" value="{{$blog->judul}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="Description">Deskripsi:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi"
                        rows="3">{{$blog->deskripsi}}</textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="qty">Kategori:</label>
                    <select name="qty" class="form-control">
                        @foreach($kate as $d)
                        <option value="{{ $d->id }}">{{ $d->qty }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="tag">Tags:</label>
                    <select name="tag" class="form-control select2-multi" multiple="multiple">
                        @foreach($tag as $e)
                        <option value="{{ $e->id }}">{{ $e->nama_tags }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label>Penulis:</label>
                    <input type="text" class="form-control" name="penulis" value="{{$blog->penulis}}">
                    <!-- <select name="penulis">
                  <option value="Luthfi Ali Qodri" @if($blog->penulis=="Luthfi Ali Qodri") selected @endif>Pustaka Imam Syafi`i</option>
                  <option value="Joko Ali Qodri" @if($blog->penulis=="Joko Ali Qodri") selected @endif>Pustaka Ibnu Katsir</option>  
                </select> -->
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

    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <script src="vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <!-- End custom js for this page-->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.select2-multi').select2();
        });

    </script>
</body>

</html>

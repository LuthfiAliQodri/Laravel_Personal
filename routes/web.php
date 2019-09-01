<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/blog', 'BlogController@get');

Route::get('/blog/filter/{id}', function($id){
    $blogFilter = DB::table('blogs')->where('qty', $id)->get();
    return view('blogFilter', ['blogFilter' => $blogFilter]);
});


Route::get('/profile', function () {
    return view('profile');
});

Route::get('/portofolio', function () {
    return view('portofolio');
});

Route::get('/blog_post', function () {
    return view('blog_post');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/projectblog', function () {
    return view('allblog');
});

Route::get('/projectgallery', function () {
    return view('allgallery');
});

Route::get('/projecttag', function () {
    return view('alltags');
});

Route::get('/projectcategorie', function () {
    return view('allcategorie');
});

Route::get('/copyright', function () {
    return view('copyright');
});

Route::get('/serversidecategorie', function () {
    return view('serversidecategorie');
});

Route::get('/serversideblog', function () {
    return view('serversideblog');
});

Route::get('/serversidegallery', function () {
    return view('serversidegallery');
});

Route::get('/serversidetags', function () {
    return view('serversidetags');
});

Route::get('/gallery', 'GalleryController@index1');

Auth::routes();

Route::resource('blogs','BlogController');

Route::resource('galleries','GalleryController');

Route::resource('categories','CategorieController');

Route::resource('tags','TagController');

Route::get('/role', 'role@index')->name('lihatdata');

Route::get('/dashboard', 'role@index1')->name('lihatdata');

Route::get('/projectblog', 'BlogController@index1');

Route::get('/projectgallery', 'GalleryController@index2');

Route::get('/projectcategorie', 'CategorieController@index1');

Route::get('/projecttag', 'TagController@index');

Route::get('/judul','PostController@search');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/search', 'BlogController@search')->name('search.src')->middleware('auth');

Route::post('/comments','BlogCommentController@store')->name('blog.comment.store');

Route::get('/categorie', 'CategorieController@index1');
Route::get('/categorie/export_excel', 'CategorieController@export_excel');

Route::get('categorie/json','CategorieController@json');
Route::get('blog/json','BlogController@json');
Route::get('gallery/json','GalleryController@json');
Route::get('tags/json','TagController@json');

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Komen;
use App\Categorie;
use App\Tags;
use DataTables;

class BlogController extends Controller
{

    //untuk hak akses buat login dahulu
    // public function __construct() {
    //     $this->middleware('auth')->except('index', 'blogs');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if($request->has('cari')){
            $blogs= \App\Blog::where('judul','LIKE','%' .$request->cari. '%')->get();
        }else{
            $blogs= \App\Blog::all();
        }
        
        return view('datablog',compact('blogs'));     
    }

    public function json(){
        return Datatables::of(Blog::all())->make(true);
    }

    public function index1(){
        $blogs = \App\Blog::all();
        $kate = \App\Categorie::all();
        $tag = Tags::all();
        return view('allblog',compact('blogs'))->withTag($tag)->withKate($kate);
    }

    public function index2(){
        $blogs = \App\Blog::all();
        $tag = Tags::all();
        return view('createblog',compact('blogs'))->withTag($tag);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('createblog');
    }

    public function get()
    {
        $blog = Blog::orderby('id', 'DESC')->get();
        $cat  = Categorie::all();
        return view('blog')->withBlogs($blog)
                                 ->withCategories($cat);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = new \App\Blog;
        if($request->file('foto') == "")
        {
            $blog->foto = $blog->foto;
        } 
        else
        {
            $this->validate($request, ['foto' => 'required|image|mimes:jpeg,png,jpg|max:10000']);
            $file       = $request->file('foto');
            $fileName  = rand() . '.'. $file->getClientOriginalName();
            $request->file('foto')->move("uploads/", $fileName);
            $blog->foto = $fileName;
        }
        $blog->judul = $request->get('judul');
        $blog->deskripsi = $request->get('deskripsi');
        $blog->penulis = $request->get('penulis');
        
        
       
        $blog->qty = $request->get('qty');
        $blog->update();
        $blog->save();
        $blog->tags()->sync($request->tags, false);
        
        return redirect('/blog')->with('success', 'Data Artikel telah Ditambahkan');
        return redirect()->to('/blog');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $blog = \App\Blog::find($id);
        $com  = \App\Komen::where('post_id', $id)->get();
        return view('blogpost',compact('blog','id'))->withCome($com);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $blog = \App\Blog::find($id);
        $kate  = \App\Categorie::all();
        $tag = \App\Tags::all();
        return view('editblog',compact('blog','id'))->withKate($kate)->withTag($tag);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $blog= \App\Blog::find($id);
        if ($file= $request->file('foto')){
        $fileName   = $file->getClientOriginalName();
        $request->file('foto')->move("uploads/", $fileName);
        $blog->foto = $fileName;
            // $path = $request->foto->path();   
            // $request->foto->store('public/uploads');
        }
    
        
        $blog->judul = $request->get('judul');
        $blog->deskripsi = $request->get('deskripsi');
        $blog->penulis = $request->get('penulis');
        $blog->qty = $request->get('qty');
        
        
        
        $blog->save();
           return redirect('/blog')->with('blogs',$blog);
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $blog = \App\Blog::find($id);
        $blog->delete();
        return redirect('blog')->with('success','Data Artikel telah di hapus');
    }

    public function search(Request $req)
    {
        $src = Blog::orderBy('id', 'DESC')->where('judul', 'LIKE', '%' .$req->search.'%')->paginate(5);

        $kt = Categorie::all();
        $all = Blog::orderBy('id', 'DESC')->paginate(5);
        return view ('search')->withSrc($src)
                            ->withKt($kt)
                            ->withAll($all);
    }

    public function read($id)
    {
        $read = Blog::find($id);
        $all = Blog::orderBy('id', 'DESC')->get();
    }

}

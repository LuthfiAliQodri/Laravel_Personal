<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use DataTables;


class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $galleries=\App\Gallery::all();
        return view('datagallery',compact('galleries')); 
    }

    public function json(){
        return Datatables::of(Gallery::all())->make(true);
    }

    public function index1()
    {
        //
        $galleries=\App\Gallery::all();
        return view('gallery',compact('galleries')); 
    }

    public function index2()
    {
        //
        $galleries=\App\Gallery::all();
        return view('allgallery',compact('galleries')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('creategallery');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $gallery = new \App\Gallery;
        if($request->file('foto') == "")
        {
            $gallery->foto = $gallery->foto;
        } 
        else
        {
            $file       = $request->file('foto');
            $fileName   = $file->getClientOriginalName();
            $request->file('foto')->move("uploadsgallery/", $fileName);
            $gallery->foto = $fileName;
        }
        $gallery->judul = $request->get('judul');
        $gallery->deskripsi = $request->get('deskripsi');
        
        
        
        $gallery->update();
        $gallery->save();
        return redirect('/gallery')->with('success', 'Data Gallery telah Ditambahkan');
        return redirect()->to('/gallery');
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
        $gallery = \App\Gallery::find($id);
        return view('editgallery',compact('gallery','id')); 
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
        $gallery= \App\Gallery::find($id);
        if ($file= $request->file('foto')){
        $fileName   = $file->getClientOriginalName();
        $request->file('foto')->move("uploadsgallery/", $fileName);
        $gallery->foto = $fileName;
            // $path = $request->foto->path();   
            // $request->foto->store('public/uploads');
        }
    
        
        $gallery->judul = $request->get('judul');
        $gallery->deskripsi = $request->get('deskripsi');
        
        
        
        $gallery->save();
           return redirect('/gallery')->with('galleries',$gallery);
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
        $gallery = \App\Gallery::find($id);
        $gallery->delete();
        return redirect('gallery')->with('success','Data Gallery telah di hapus');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Komen;
use App\Categorie;
use DataTables;

use App\Exports\CategorieExport;
use Maatwebsite\Excel\Facades\Excel;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories=\App\Categorie::all();
        return view('dataqty',compact('categories'))->withAuth(Auth::user()->name);    
    }

    public function json(){
        return Datatables::of(Categorie::all())->make(true);
    }

    public function index3()
    {
        //
        return view('serversidecategorie');    
    }

    public function export_excel()
	{
		return Excel::download(new CategorieExport, 'categorie.xlsx');
	}

    public function index1()
    {
        //
        $categories=\App\Categorie::all();
        return view('allcategorie',compact('categories'));    
    }

    public function index2()
    {
        //
        $categories=\App\Categorie::all();
        return view('create',compact('categories'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('createqty');
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
        $categorie = new \App\Categorie;
        $categorie->qty = $request->get('qty');

        $categorie->save();
        return redirect()->to('projectcategorie');
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
        $categorie = \App\Categorie::find($id);
        return view('editqty',compact('categorie','id'));  
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
        $categorie= \App\Categorie::find($id);
        $categorie->qty = $request->get('qty');
        $categorie->save();
        return redirect()->to('projectcategorie');  
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
        $categorie = \App\Categorie::find($id);
        $categorie->delete();
        return redirect()->to('projectcategorie'); 
    }
}

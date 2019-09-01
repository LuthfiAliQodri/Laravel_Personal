<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Komen;

class BlogCommentController extends Controller
{
    //
    public function store (Request $request)
    {
        Komen::create([
            'post_id' => $request->id,
            'user_id' => auth()->id(),
            'message' => $request->message,
        ]);
        return redirect()->back();

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request){
        $post = new Post;
        $post->name = $request->name;
        $post->description = $request->description;
        $post->image = $request->image;
        
        $post->save();
    }
}

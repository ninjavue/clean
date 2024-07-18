<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request){
        $path = $request -> path();
        return view('posts.index', compact('path'));
    }

    public function show(Request $request){
        $path = $request -> path();
        return view('posts.show', compact('path'));
    }

    public function delete(){
        return view('posts.delete');
    }

    public function edit(){
        return view('posts.edit');
    }
}

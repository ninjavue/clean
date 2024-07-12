<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main(){
        return view('main');
    }
    public function about(Request $request){
        $path = $request -> path();
        return view('about', compact('path'));
    }

    public function service(Request $request){
        $path = $request -> path();
        return view('service', compact('path'));
    }

    public function project(Request $request){
        $path = $request -> path();
        return view('projects', compact('path'));
    }

    public function blog(Request $request){
        $path = $request -> path();
        return view('blog', compact('path'));
    }
    public function single(Request $request){
        $path = $request -> path();
        return view('single', compact('path'));
    }

    public function contact(Request $request){
        $path = $request -> path();
        return view('contact', compact('path'));
    }
}

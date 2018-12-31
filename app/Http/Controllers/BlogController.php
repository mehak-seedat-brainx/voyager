<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
class BlogController extends Controller
{
    public function index() {
        $blogs = Blog::all();
        return view('blog', compact('blogs'));

    }
    public function show($id) {
        $blog = Blog::find($id);
        return view('view-blog', compact('blog'));
    }
}

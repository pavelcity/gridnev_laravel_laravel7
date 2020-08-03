<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{

    public function index()
    {
        $blogs = Blog::all();
        return view ('pages.blog.index', compact('blogs'));
    }


    public function detail($id)
    {
        $blog = Blog::find($id);
        return view ('pages.blog.detail', compact('blog'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }




    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}

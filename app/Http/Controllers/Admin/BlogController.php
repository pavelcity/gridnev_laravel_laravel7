<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{

    public function index()
    {
        $blogs = Blog::all();
        return view ('admin.blog.index', compact('blogs'));
    }


    public function create()
    {
        return view ('admin.blog.create');
    }





    public function store(Request $request)
    {
        $this->validate($request, [
           'title' => 'required',
           'short_txt' => 'required',
           'bigtxt' => 'required'
        ]);

//        Blog::create($request->all());


        $blog = Blog::add($request->all());

        return redirect()->route('blog.index')->with('bloggadd', 'Заметка успешно добавлена');
    }




    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $blog = Blog::find($id);
        return view ('admin.blog.edit', compact('blog'));
    }




    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'short_txt' => 'required',
            'bigtxt' => 'required'
        ]);


        $blog = Blog::find($id);
        $blog->edit($request->all());

        return redirect()->route('blog.index')->with('bloggadd', 'Запись успешно изменена');


    }





    public function destroy($id)
    {
        //
    }
}

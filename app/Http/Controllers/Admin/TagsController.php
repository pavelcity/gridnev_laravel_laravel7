<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{

    ////// index
    public function index()
    {
        $tags = Tag::all();
        return view ('admin.tags.index', compact('tags'));
    }



    ////// create
    public function create()
    {
        return view ('admin.tags.create');
    }



    ////// store
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'pic' => 'nullable|image'
        ], [
            'title.required' => 'Поле не может быть пустым',
            'pic.image' => 'для загрузки только картинки'
        ]);


        $tag = Tag::add($request->all());
        $tag->dobavitPic($request->file('pic'));
        return redirect()->route('tags.index');
    }




    ////// edit
    public function edit($id)
    {
        $tag = Tag::find($id);
        return view ('admin.tags.edit', compact('tag'));
    }




    ////// update
    public function update(Request $request, $id)
    {
        $this->validate($request, [
           'title' => 'required'
        ], [
            'title.required' => 'Поле не может быть пустым'
        ]);

        $tag = Tag::find($id);
        $tag->edit($request->all());

        return redirect()->route('tags.index');

    }



    ### destroy
    public function destroy($id)
    {
        Tag::find($id)->remove();
        return redirect()->route('tags.index');
    }
}

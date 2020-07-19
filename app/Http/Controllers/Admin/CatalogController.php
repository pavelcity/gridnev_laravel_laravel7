<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Catalog;
use App\Category;
use App\Tag;

class CatalogController extends Controller
{


    ### index
    public function index()
    {

        $catalogs = Catalog::all();
        return view ('admin.catalog.index', compact('catalogs'));
    }


    ### create
    public function create()
    {
        $tags = Tag::pluck('title', 'id')->all();
        $category = Category::pluck('title', 'id')->all();
        return view ('admin.catalog.create', compact('tags', 'category'));
    }



    ### store
    public function store(Request $request)
    {

//        dd($request->all());
        $this->validate($request, [
            'title' => 'required',
            'big_text' => 'required',
            'srok_godnosti' => 'required',
            'date' => 'required',
            'image' => 'nullable|image'
        ]);


//          dd($request->get('status'));


        $catalog = Catalog::add($request->all());
        $catalog->uploadImage($request->file('image'));
        $catalog->setCategory($request->get('category_id'));
        $catalog->setTags($request->get('tags'));
        $catalog->toggleStatus($request->get('status'));

        return redirect()->route('catalog.index');
    }



    ### edit
    public function edit($id)
    {
        $catalog = Catalog::find($id);
        $category = Category::pluck('title', 'id')->all();
        $tags = Tag::pluck('title', 'id')->all();
        return view ('admin.catalog.edit', compact('catalog', 'category', 'tags'));
    }



    ### update
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'title' => 'required',
            'big_text' => 'required',
            'srok_godnosti' => 'required',
            'date' => 'required',
            'image' => 'nullable|image'
        ]);


//          dd($request->get('status'));


        $catalog = Catalog::find($id);
        $catalog->edit($request->all());
        $catalog->uploadImage($request->file('image'));
        $catalog->setCategory($request->get('category_id'));
        $catalog->setTags($request->get('tags'));
        $catalog->toggleStatus($request->get('status'));

        return redirect()->route('catalog.index');
    }






    ### delete
    public function destroy($id)
    {
        Catalog::find($id)->remove();
        return redirect()->route('catalog.index');
    }



}

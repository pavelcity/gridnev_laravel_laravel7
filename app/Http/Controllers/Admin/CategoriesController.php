<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    ////// index
    public function index () {
        $categories = Category::all();
        return view ('admin.categories.index', compact('categories'));
    }


    ////// create
    public function create () {
        return view ('admin.categories.create');
    }


    ////// store
    public function store (Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'avatar' => 'nullable|image'
        ], [
            'title.required' => 'Поле не может быть пустым',
            'avatar.image' => 'формат картинки - неверный'
        ]);

//        dd ($request->file('pic'));

        $category = Category::sozdanie($request->all());
        $category->zagruzitPic($request->file('avatar'));

        return redirect()->route('categories.index');
    }


    ////// edit
    public function edit ($id) {
        $category = Category::find($id);
        return view ('admin.categories.edit', compact('category'));
    }


    ////// update
    public function update(Request $request, $id) {
        $this->validate($request, [
           'title' => 'required'
        ], [
            'title.required' => 'Поле не может быть пустым'
        ]);

        $category = Category::find($id);
        $category->redactirovanie($request->all());

        return redirect()->route('categories.index');
    }


    ////// destroy
    public function destroy ($id) {
        Category::find($id)->udalenie();
        return redirect()->route('categories.index');
     }



}

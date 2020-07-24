<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Catalog;
use Illuminate\Http\Request;


class CatalogController extends Controller
{

    public function index()
    {
        $catalogs = Catalog::paginate(12);
        $tags = Tag::all();
        return view ('pages.catalog', compact('catalogs', 'tags'));
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

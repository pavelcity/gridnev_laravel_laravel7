<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;

class ShopController extends Controller
{

    public function index()
    {
        $shops = Shop::all();
        return view ('pages.shop.index', compact('shops'));
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

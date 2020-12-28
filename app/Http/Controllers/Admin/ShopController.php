<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Shop;

class ShopController extends Controller
{

    public function index()
    {
        $shops = Shop::all();
        return view ('admin.shop.index', compact('shops'));
    }


    public function create()
    {
        return view ('admin.shop.create');
    }





    public function store(Request $request)
    {
//        dd($request->all());
        $this->validate($request, [
            'name' => 'required',
            'time_job' => 'required',
            'phone_shop' => 'required',
        ], [
            'name.required' => 'обязательное поле',
            'tine_job.required' => 'обязательное поле',
            'phone_shop.required' => 'обязательное поле'
        ]);

        $shop = Shop::add($request->all());
        $shop->uploadImage($request->file('image'));
        return redirect()->route('shop.index')->with('yes', 'Запись успешно добавлена');

    }






    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $shop = Shop::find($id);
        return view ('admin.shop.edit', compact('shop'));
    }





    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'time_job' => 'required',
            'phone_shop' => 'required',
        ], [
            'name.required' => 'обязательное поле',
            'tine_job.required' => 'обязательное поле',
            'phone_shop.required' => 'обязательное поле'
        ]);

        $shop = Shop::find($id);
        $shop->edit($request->all());
        $shop->uploadImage($request->file('image'));

        return redirect()->route('shop.index')->with('yes', 'Запись изменена');

    }







    public function destroy($id)
    {
        Shop::find($id)->remove();
        return redirect()->route('shop.index')->with('yes', 'Запись удалена');
    }
}

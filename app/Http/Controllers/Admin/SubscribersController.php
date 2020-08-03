<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Subscription;
use Illuminate\Http\Request;

class SubscribersController extends Controller
{

    public function index()
    {
        $subs = Subscription::paginate(10);
        return view('admin.subscribers.index', compact('subs'));
    }


    public function create()
    {
        return view ('admin.subscribers.create');
    }






    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:subscriptions'
        ], [
            'email.required' => 'Обязательное поле',
            'email.email' => 'Введите e-mail',
            'email.unique' => 'Этот e-mail уже существует в базе'
        ]);

         $subs = Subscription::add($request->get('email'));
         return redirect()->route('subscribers.index')->with('addSubs', 'Подписчик добавлен в базу');
    }





    public function show($id)
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
        Subscription::find($id)->remove();
        return redirect()->route('subscribers.index')->with('delSubs', 'Подписчик удален из базы');
    }
}

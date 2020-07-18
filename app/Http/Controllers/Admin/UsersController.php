<?php

namespace App\Http\Controllers\Admin;

use  App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{



    ### index
    public function index()
    {
        $users = User::all();
        return view ('admin.users.index', compact('users'));
    }




    ### create
    public function create()
    {
        return view ('admin.users.create');
    }



    ### store
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'avatar' => 'nullable|image'
        ], [
            'name.required' => 'поле Имя должно быть заполнено',
            'email.required' => 'заполните поле почта',
            'password.required' => 'вы забыли пароль',
            'avatar.image' => 'для аватарки доступна загрузка только картинок'
        ]);

//        dd($request->file('avatar'));


        $user = User::add($request->all());
        $user->generatePassword($request->get('password'));
        $user->uploadAvatar($request->file('avatar'));

        return redirect()->route('users.index');
    }





    ### edit
    public function edit($id)
    {
        $user = User::find($id);
        return view ('admin.users.edit', compact('user'));
    }




    ### update
    public function update(Request $request, $id)
    {

        $user = User::find($id);

        $this->validate($request, [
            'name' => 'required',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($user->id),
            ],
            'avatar' => 'nullable|image'
        ], [
            'name.required' => 'поле Имя должно быть заполнено',
            'email.required' => 'заполните поле почта',
            'avatar.image' => 'для аватарки доступна загрузка только картинок'
        ]);

        $user->edit($request->all());
        $user->generatePassword($request->get('password'));
        $user->uploadAvatar($request->file('avatar'));

        return redirect()->route('users.index');
    }






    ### destroy
    public function destroy($id)
    {
//        User::find($id)->remove();
        User::find($id)->delete();
        return redirect()->route('users.index');
    }
}

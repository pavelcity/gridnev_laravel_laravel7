<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public  function registerForm () {
        return view ('pages.register');
    }



    public function register (Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ], [
            'name.required' => 'поле Имя обязтельно к заполнению',
            'email.required' => 'поле E-mail обязтельно к заполнению',
            'email.email' => 'поле E-mail должно быть в формате email@i.com',
            'email.unique' => 'Такой email уже занят',
            'password.required' => 'Пароль - обязательное поле'
        ]);

//        User::create($request->all());

       $user = User::add($request->all());
       $user->generatePassword($request->get('password'));

        return redirect()->route('login.form');
    }



    public function loginForm () {
        return view ('pages.login');
    }





    public function login (Request $request) {

        $this->validate($request, [
            'email' => 'required|email|',
            'password' => 'required'
        ], [
            'email.required' => 'поле E-mail обязтельно к заполнению',
            'email.email' => 'поле E-mail должно быть в формате email@i.com',
            'password.required' => 'Пароль - обязательное поле'
        ]);

//        dd(Auth::check());

        $result = Auth::attempt([
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ]);

        if ($result) {
            return redirect()->route('home');
        }
        else {
            return redirect()->back()->with('status', 'Неправильный логин или пароль');
        }
    }




    public function logout () {
        Auth::logout();
        return redirect()->route('login.form')->with('logout', 'Вы вышли из системы');
    }




}

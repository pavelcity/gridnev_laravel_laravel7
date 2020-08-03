<?php

namespace App\Http\Controllers;

use App\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriberEmail;
class SubscribersController extends Controller
{


    public function subscribe (Request $request) {

        $this->validate($request, [
            'email' => 'required|email|unique:subscriptions'
        ], [
            'email.required' => 'поле не может быть пустым',
            'email.unique' => 'такой e-mail уже используется'
        ]);

        $subs = Subscription::add($request->get('email'));
        $subs->generateToken();
        Mail::to($subs)->send(new SubscriberEmail($subs));

        return redirect()->back()->with('sendmail', 'Подтвердите подписку прейдя по ссыке в письме отравленного вам на e-mail');
    }




    public function verify ($token) {

        $subs = Subscription::where('token', $token)->firstOrFail();
        $subs->token = null;
        $subs->save();

        return redirect()->route('home')->with('oksubs', 'Ваш e-mail успешно подтвержден');
    }







}

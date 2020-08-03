<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Subscription extends Model
{
    public static function add ($email) {
        $subscriber = new static;
        $subscriber->email = $email;
        $subscriber->save();

        return $subscriber;
    }


    public function generateToken () {
        $this->token = Str::random(100);
        $this->save();
    }

    public function remove () {
        $this->delete();
    }
}

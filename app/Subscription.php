<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    public static function add ($email) {
        $subscriber = new static;
        $subscriber->email = $email;
        $subscriber->token = Str::random(100);
        $subscriber->save();

        return $subscriber;
    }

    public function remove () {
        $this->delete();
    }
}

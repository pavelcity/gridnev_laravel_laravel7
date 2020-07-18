<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class User extends Authenticatable
{
    use Notifiable;



    protected $fillable = [
        'name', 'email'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function catalog () {
        return $this->hasMany(Catalog::class);
    }

    public function comments () {
        return $this->hasMany(Comment::class);
    }




    //------------------------------------------


    ### метод работы с паролем
    public function generatePassword ($password) {
        if ($password != null) {
            $this->password = bcrypt($password);
            $this->save();
        }
    }




    ### добавление пользователя
    public static function add ($fields) {
        $user = new static;
        $user->fill($fields);
        $user->save();

        return $user;
    }



    ### изменение пользователя
    public function edit ($fields) {
        $this->fill($fields);
        $this->save();
    }



    ### удаление пользователя
//    public function remove () {
//        $this->removeAvatar();
//        $this->delete();
//    }

    public function delete () {
        $this->removeAvatar();
        parent::delete();
    }







    //------------------------------------------

    ### удаление картинки
    public function removeAvatar () {
        if ($this->avatar != null) {
            Storage::delete('/uploads/'. $this->avatar);
        }
    }



    ### загрузить картинку
    public function uploadAvatar ($image) {

        if($image == null) {return;}

        $this->removeAvatar();

        $filename = Str::random(10) . '.' . $image->extension();
        $image->storeAs('/uploads/', $filename);
        $this->avatar = $filename;
        $this->save();

    }


    ### вывод картинки
    public function getImage () {

        if ($this->avatar == null) {
            return '/img/not_avatar.jpg';
        }
        return '/uploads/' . $this->avatar;
    }







    //------------------------------------------

    ### пользователь админ или нет
    public function makeAdmin () {
        $this->is_admin = 1;
        $this->save();
    }

    public function makeNormal () {
        $this->is_admin = 0;
        $this->save();
    }

    public function toggleAdmin ($value) {
        if ($value == null) {
            return $this->makeNormal();
        }
        return $this->makeAdmin();
    }





    //------------------------------------------

    ###  пользователь забанен или нет
    public function makeBan () {
        $this->ban_or_not = 1;
        $this->save();
    }

    public function removeBan () {
        $this->ban_or_not = 0;
        $this->save();
    }

    public function toggleBan ($value) {
        if ($value == null) {
            return $this->removeBan();
        }
            return $this->makeBan();
    }







}

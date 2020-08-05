<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Contacts extends Model
{
    protected $fillable = [
        'one_title',
        'one_index',
        'one_street',
        'one_phone',
        'one_email',
        'two_title',
        'two_prodazi_1_phone',
        'two_prodazi_2_phone',
        'two_snabzenie_1_phone',
        'two_technologi_1_phone',
        'tri_title',
        'tri_phone',
        'four_title',
        'four_phone',
    ];




    //------------------------------------------

    public static function add ($fields) {
        $contacts = new static;
        $contacts->fill($fields);
        $contacts->save();

        return $contacts;
    }



    public function edit ($fields) {
        $this->fill($fields);
        $this->save();
    }


    public function remove () {
        $this->delete();
    }









    //------------------------------------------

    ### удаление картинки
    public function removeAvatar () {
        if ($this->director != null) {
            Storage::delete('/uploads/' . $this->director);
        }
    }

    ////// загрузка картинки
    public function uploadDirector ($image) {
        if ($image == null) {return;}

        $this->removeAvatar();


        $filename = Str::random(10) . '.' . $image->extension();
        $image->storeAs('/uploads/', $filename);
        $this->director = $filename;
        $this->save();
    }




    ////// вывод картинки
    public function showPic () {
        if ($this->director == null) {
            return '/img/not_avatar.jpg';
        }
        return '/uploads/' . $this->director;
    }
}

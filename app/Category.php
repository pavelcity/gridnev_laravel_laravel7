<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Category extends Model
{

    use Sluggable;

    protected $fillable = ['title'];

    //////
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


    //////
    public function catalog () {
        return $this->hasMany(Catalog::class);
    }



    //------------------------------------------

    ////// добавление категории
    public static function sozdanie ($fields) {
        $category = new static;
        $category->fill($fields);
        $category->save();

        return $category;
    }

    ////// изменение категории
    public function redactirovanie ($fields) {
        $this->fill($fields);
        $this->save();
    }

    ////// удаление категории
    public function udalenie () {
        $this->removeAvatar();
        $this->delete();
    }




    //------------------------------------------

    ### удаление картинки
    public function removeAvatar () {
        if ($this->avatar != null) {
            Storage::delete('/uploads/' . $this->avatar);
        }
    }

    ////// загрузка картинки
    public function zagruzitPic ($image) {
        if ($image == null) {return;}

        $this->removeAvatar();


        $filename = Str::random(10) . '.' . $image->extension();
        $image->storeAs('/uploads/', $filename);
        $this->avatar = $filename;
        $this->save();
    }




    ////// вывод картинки
    public function showPic () {
        if ($this->avatar == null) {
            return '/img/not_avatar.jpg';
        }
        return '/uploads/' . $this->avatar;
    }



}

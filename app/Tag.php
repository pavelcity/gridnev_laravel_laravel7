<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Tag extends Model
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
        return $this->belongsToMany(
            Catalog::class,
            'catalog_tags',
            'post_id',
            'tag_id'
        );
    }



    //------------------------------------------

    ////// добавление тега
    public static function add ($fields) {
        $tag = new static;
        $tag->fill($fields);
        $tag->save();

        return $tag;
    }


    ////// изменение тега
    public function edit ($fields) {
        $this->fill($fields);
        $this->save();
    }


    ////// удаление тега
    public function remove () {
        $this->removePic();
        $this->delete();
    }






    //------------------------------------------

    ### удаление картинки
    public function removePic () {
        if ($this != null) {
            Storage::delete('/uploads/' . $this->pic);
        }
    }



    ### добавляем картинку
    public function dobavitPic ($img) {
        if ($img == null) {return;}

        $this->removePic();

        $namefile = Str::random(10) . '.' . $img->extension();
        $img->storeAs('/uploads/', $namefile);
        $this->pic = $namefile;
        $this->save();
    }


    ### выводим картинку
    public function showPic () {
        if ($this->pic == null) {
            return '/img/not_avatar.jpg';
        }
        return '/uploads/' . $this->pic;
    }




}

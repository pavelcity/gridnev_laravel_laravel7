<?php

namespace App;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Str;

class Blog extends Model
{
    use Sluggable;

    protected $fillable = ['title', 'short_txt', 'bigtxt'];



    //////
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }



    ### add blog
    public static function add ($fields) {
        $blog = new static;
        $blog->fill($fields);
        $blog->save();

        return $blog;
    }



    ### изменение записи блога
    public function edit ($fields) {
        $this->fill($fields);
        $this->save();
    }



    ### удаление записи блога
    public function remove () {
        $this->delete();
    }





    //------------------------------------------

    ### загрузка картики
    public function addImage ($image) {
        if ($image == null) {return;}

        $filename = Str::random(10). '.' . $image->extension();
        $image->storeAs('/uploads', $filename);
        $this->image = $filename;
        $this->save();
    }


    ### показать картинку
    public function showImage() {
        if($this->image == null) {
            return '/img/not_avatar.jpg';
        }
        return '/uploads/' . $this->image;
    }






}

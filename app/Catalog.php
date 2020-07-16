<?php

namespace App;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\Storage;

class Catalog extends Model
{

    const IS_DRAFT = 0;
    const IS_PUBLIC = 1;

    use Sluggable;


    protected $fillable = ['title', 'text', 'srok_godnosti'];


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
    public function category() {
        return $this->hasOne(Category::class);
    }

    //////
    public function author () {
        return $this->hasOne(User::class);
    }



    //////
    public function tags () {
        return $this->belongsToMany(
            Tag::class,
            'catalog_tags',
             'post_id',
            'tag_id'
        );
    }




    //------------------------------------------

    ////// add
    public static function add ($fields) {
        $catalog = new static;
        $catalog->fill($fields);
        $catalog->user_id = 1;
        $catalog->save();

        return $catalog;
    }

    ////// edit
    public function edit ($fields) {
        $this->fill($fields);
        $this->save();
    }


    ////// remove
    public function remove () {
        Storage::delete('public/uploads'. $this->image);
        $this->delete();
    }





    //------------------------------------------

    ////// загрузить картинку
    public function uploadImage ($image) {

        if($image == null) {return;}

        Storage::delete('public/uploads'. $this->image);

        $filename = Str::random(10) . '.' . $image->extension();
        $image->storeAs('public/uploads/', $filename);
        $this->image = $filename;
        $this->save();
    }


    ////// вывод картинки
    public function getImage () {
        if ($this->image == null) {
            return '/img/not_img.jpg';
        }
        return '/storage/uploads/' . $this->image;
    }



    //------------------------------------------

    ////// привязка к категории
    public function setCategory ($id) {
        if ($id == null) {return;}
        $this->category_id = $id;
        $this->save();
    }


    ////// привязка к тегам
    public function setTags ($ids) {
        if ($ids == null) {return;}
        $this->tags()->sync($ids);
    }




    ////// статус - черновик или нет
    public function setDraft () {
        $this->status = Catalog::IS_DRAFT;
        $this->save();
    }

    public function setPublic () {
        $this->status = Catalog::IS_PUBLIC;
        $this->save();
    }

    public function toggleStatus ($value) {
        if ($value == null) {
            return $this->setDraft();
        }
            return $this->setPublic();
    }






}

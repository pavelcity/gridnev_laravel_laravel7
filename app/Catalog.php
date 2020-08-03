<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Auth;


class Catalog extends Model
{

    const IS_DRAFT = 0;
    const IS_PUBLIC = 1;

    use Sluggable;


    protected $fillable = ['title', 'srok_godnosti', 'date', 'big_text'];


    ###
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }






    ### создаем связь с категориями
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getCategoryTitle () {
        if ($this->category != null) {
            return $this->category->title;
        }
        return 'без категории';
    }







    ### создаем связь с автором
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }






    ### создаем связь с тегами
    public function tags()
    {
        return $this->belongsToMany(
            Tag::class,
            'catalog_tags',
            'post_id',
            'tag_id'
        );
    }

    public function getTagsTitles () {
        if (!$this->tags->isEmpty()) {
            return implode(', ', $this->tags->pluck('title')->all());
        }
        return 'нет тегов';

    }





    ### связь с комментариями
    public function comments () {
        return $this->hasMany(Comment::class, 'post_id');
    }






    //------------------------------------------

        ### add
        public static function add($fields)
        {
            $catalog = new static;
            $catalog->fill($fields);
            $catalog->user_id = Auth::user()->id;

            $catalog->save();
            // parent::save();

            return $catalog;
        }




        ### edit
        public function edit($fields)
        {
            $this->fill($fields);
            $this->save();
        }




        ### remove
        public function remove()
        {
            $this->removeImage();
        //  $this->delete();
            parent::delete();
        }






        ### установка даты - день|месяц|год
        ### срабатывает до записи в базу
        public function setDateAttribute ($value)
        {
            $date = Carbon::createFromFormat('d.m.Y', $value)->format('Y-m-d');
            $this->attributes['date'] = $date;
        }


        ### срабатывает перед выводом на страницу
        public function getDateAttribute ($value) {
            $date = Carbon::createFromFormat('Y-m-d', $value)->format('d.m.Y');
            return $date;
        }


        public function getDate () {
            return $this->date;
        }







    //------------------------------------------

    ### удалить картинку
    public function removeImage()
    {
        if ($this != null) {
            Storage::delete('/uploads/' . $this->image);
        }
    }




    ### загрузить картинку
    public function uploadImage($image)
    {

        if ($image == null) { return; }

        $this->removeImage();

        $filename = Str::random(10) . '.' . $image->extension();
        $image->storeAs('/uploads/', $filename);
        $this->image = $filename;
        $this->save();
    }





    ### вывод картинки
    public function getImage()
    {
        if ($this->image == null) {
            return '/img/not_img.jpg';
        }
        return '/uploads/' . $this->image;
    }







    //------------------------------------------

    ### привязка к категории
    public function setCategory($id) {
        if ($id == null) {return;}

        $this->category_id = $id;
        $this->save();
    }




    ### привязка к тегам
    public function setTags($ids)
    {
        if ($ids == null) {
            return;
        }
        $this->tags()->sync($ids);
    }


    ### статус - черновик или нет
    public function setDraft()
    {
        $this->status = Catalog::IS_DRAFT;
        $this->save();
    }

    public function setPublic()
    {
        $this->status = Catalog::IS_PUBLIC;
        $this->save();
    }

    public function toggleStatus($value)
    {
        if ($value == null) {
            return $this->setDraft();
        }
        return $this->setPublic();
    }





    //------------------------------------------

    ### следующая предыдующая запись

    public function hasPrevTovar () {
        return self::where('id', '<', $this->id)->max('id');
    }

    public function getPrevTovar () {
        $catalogID = $this->hasPrevTovar();
        return self::find($catalogID);
    }




    public function hasNextTovar () {
        return self::where('id', '>', $this->id)->min('id');
    }

    public function getNextTovar () {
        $catalogID = $this->hasNextTovar();
        return self::find($catalogID);
    }





    ### похожие записи - вывод всех записей кроме текущей
    public function related () {
        return self::all()->except($this->id);
    }





}

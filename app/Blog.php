<?php

namespace App;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
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







}

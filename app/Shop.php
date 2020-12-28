<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Shop extends Model
{
    protected $fillable = ['name', 'time_job', 'phone_shop' ];





    //------------------------------------------

    ### add
    public static function add($fields)
    {
        $shop = new static;
        $shop->fill($fields);

        $shop->save();
        // parent::save();

        return $shop;
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



}

<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;
use App\Catalog;
class HomeController extends Controller
{



    public function index () {
        $catalogs = Catalog::paginate(15);
        return view ('pages.index', compact('catalogs'));
    }



    ### показываем детальную карточку товара с главной страницы
    public function detail ($slug) {
        $catalog = Catalog::where('slug', $slug)->firstOrFail();
        return view ('pages.detail', compact('catalog'));
    }





    ### выводим сортировку по тегам
    public function tag ($slug) {
        $tag = Tag::where('slug', $slug)->firstOrFail();

//        dd($tag->catalog()->paginate(3));

        $catalogs = $tag->catalog;
        return view ('pages.tag', compact('catalogs'));
    }





}

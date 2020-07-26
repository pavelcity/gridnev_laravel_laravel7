<?php

namespace App\Http\Controllers;

use App\Category;
use App\Tag;
use Illuminate\Http\Request;
use App\Catalog;
class HomeController extends Controller
{



    public function index () {
        $catalogs = Catalog::paginate(24);
        $tags = Tag::all();

        return view ('pages.index', compact('catalogs', 'tags'));
    }





    ### показываем детальную карточку товара с главной страницы
    public function detail ($slug) {
        $catalog = Catalog::where('slug', $slug)->firstOrFail();
        $tags = Tag::all();

        return view ('pages.detail', compact('catalog', 'tags'));
    }





    ### выводим сортировку по тегам
    public function tag ($slug) {
        $tag = Tag::where('slug', $slug)->firstOrFail();
        $catalogs = $tag->catalog()->paginate(10);
        return view ('pages.tag', compact('catalogs', 'tag'));
    }





}

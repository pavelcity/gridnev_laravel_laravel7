<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catalog;
class HomeController extends Controller
{



    public function index () {
        $catalogs = Catalog::paginate(3);
        return view ('pages.index', compact('catalogs'));
    }



    ### показываем детальную карточку товара с главной страницы
    public function detail ($slug) {
        $catalog = Catalog::where('slug', $slug)->firstOrFail();
        return view ('pages.detail', compact('catalog'));
    }



}

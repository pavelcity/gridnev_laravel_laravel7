<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Tag;
use App\Catalog;
use App\Blog;
use App\Shop;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index () {
        $category = Category::all();
        $tags = Tag::all();
        $catalog = Catalog::all();
        $blog = Blog::all();
        $shop = Shop::all();
        return view('admin.dashboard', compact('category', 'tags', 'catalog', 'blog', 'shop'));
    }
}

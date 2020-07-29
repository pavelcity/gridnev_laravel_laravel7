<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Tag;
use Illuminate\Http\Request;
use App\Catalog;
use Auth;
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
        $user = Auth::user();

        return view ('pages.detail', compact('catalog', 'tags', 'user'));
    }





    ### выводим сортировку по тегам
    public function tag ($slug) {
        $tag = Tag::where('slug', $slug)->firstOrFail();
        $catalogs = $tag->catalog()->paginate(10);
        return view ('pages.tag', compact('catalogs', 'tag'));
    }





    public function comment (Request $request) {

        $this->validate($request, [
           'text' => 'required'
        ], [
            'text.required' => 'Комментарий не может быть пустым'
        ]);

//        dd($request->get('post_id'));

        $comment = new Comment;
        $comment->text = $request->get('text');
        $comment->post_id = $request->get('post_id');
        $comment->user_id = Auth::user()->id;
        $comment->save();

        return redirect()->back()->with('status', 'Ваш комментарий будет скоро добавлен');
    }




}

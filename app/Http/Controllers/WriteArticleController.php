<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class WriteArticleController extends AppController
{
    public function index()
    {
        $categories = $this->parent();
        $allCategories = $this->allCategories();
        return view('write.index',['categories' => $categories,'allCategories' => $allCategories]);
    }

    public function new(Request $request)
    {
        Article::create([
           'user_id' =>  $request->get('user_id'),
            'title' => $request->get('title'),
            'author' => $request->get('author'),
            'content' => $request->get('content'),
            'cate_id' => $request->get('cate_id')
        ]);
        return redirect('/');
    }
}

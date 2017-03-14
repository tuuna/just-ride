<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends AppController
{
    public function show($id)
    {
        $details = Article::with('cate')->where('id',$id)->get()->toArray();
        $categories = $this->parent();
        return view('article.single',['details' => $details,'categories' => $categories]);
    }
}

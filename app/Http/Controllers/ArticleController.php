<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use Illuminate\Http\Request;

class ArticleController extends AppController
{
    public function show($id)
    {
        $details = Article::with('cate')->where('id',$id)->get()->toArray();
        $userId = Article::with('user')->where('id',$id)->first()->user->id;
        $categories = $this->parent();
        Article::find($id)->increment('click_count');
        return view('article.single',['details' => $details,'categories' => $categories,'userId' => $userId]);
    }
}

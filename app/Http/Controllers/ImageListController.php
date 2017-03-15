<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ImageListController extends AppController
{
    public function index()
    {
        $categories = $this->parent();
        $articles = Article::paginate(6);
        return view('image.imagelist',['categories' => $categories,'articles' => $articles]);
    }
}

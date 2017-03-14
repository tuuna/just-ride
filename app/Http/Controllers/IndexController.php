<?php

namespace App\Http\Controllers;

use App\Article;
use App\Cate;
use App\Repositories\IndexInfoRepository;
use Illuminate\Http\Request;

class IndexController extends AppController
{
    protected $articles,$categories;

    public function __construct(IndexInfoRepository $articles,
                                IndexInfoRepository $categories)
    {
        $this->articles = $articles;
        $this->categories = $categories;
    }

    public function index()
    {
//        $model = Article::all();
        $articles = Article::with('cate')->paginate(4);
        $categories = $this->parent();
        return view('home.index',['categories' => $categories,'articles' => $articles]);
    }
}

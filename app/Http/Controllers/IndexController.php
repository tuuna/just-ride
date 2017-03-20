<?php

namespace App\Http\Controllers;

use App\Article;
use App\Cate;
use App\Repositories\IndexInfoRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $listInfo = Article::all()->toArray();
        $newest = array_slice(array_reverse($listInfo),0,4);
        if(Auth::check()) {

            $messageCount = Auth::user()->messages->count();
        } else {
            $messageCount = '';
        }
        return view('home.index',['categories' => $categories,'articles' => $articles,'newest' => $newest,'messageCount' => $messageCount]);
    }
}

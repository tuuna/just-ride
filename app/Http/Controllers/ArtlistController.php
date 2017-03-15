<?php

namespace App\Http\Controllers;

use App\Article;
use App\Cate;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class ArtlistController extends AppController
{
    public function index($id)
    {
        Cate::find($id)->first()->parent_id == 0 ?
            $listInfo = array_merge(Cate::with('articles')->where('id',$id)->get()->toArray(),
                                    Cate::with('articles')->where('parent_id',$id)->get()->toArray())
            :
            $listInfo = Cate::with('articles')->where('id',$id)->get()->toArray();
        $count = 0;
        foreach ($listInfo as $item) {
                $count += count($item['articles']);
        }
        $paginator = new LengthAwarePaginator($listInfo,$count,4);
        $newest = array_slice(array_reverse($listInfo),0,4);
        $categories = $this->parent();
        return view('article.list',
                ['categories' => $categories,
                'listInfo' => $listInfo,
                'newest' => $newest,
                'paginator' => $paginator]);
    }
}

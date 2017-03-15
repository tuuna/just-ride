<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function users($id)
    {
        $user = Auth::guard('api')->user();

        if($user->hasLiked($id)) {
            return response()->json(['liked' => true]);
        }

        return response()->json(['voted' => false]);
    }

    public function like()
    {
        $article = Article::find(request('article_id'));
        $liked = Auth::guard('api')->user()->likeFor(request('article_id'));

        if (count($liked['attached']) > 0) {
            $article->increment('favor_count');

            return response()->json(['liked' => true]);
        }
        $article->decrement('favor_count');
        return response()->json(['liked' => false]);
    }
}

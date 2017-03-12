<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title','content','author','user_id','cate_id','like_id'];

    public function cate()
    {
        return $this->belongsTo(Cate::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

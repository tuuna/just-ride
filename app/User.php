<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','confirmation_token','avatar','api_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function likes()
    {
        return $this->belongsToMany(Article::class,'likes')->withTimestamps();
    }

    public function likeFor($articleId)
    {
        return $this->likes()->toggle($articleId);
    }

    public function hasLiked($articleId)
    {
        return !! $this->likes()->where('article_id',$articleId)->count();
    }

    public function Messages()
    {
        return $this->hasMany(Message::class,'to_user_id');
    }
}

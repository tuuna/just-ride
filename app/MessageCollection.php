<?php
/**
 * Created by PhpStorm.
 * User: tuuna
 * Date: 17-3-21
 * Time: 下午6:12
 */

namespace App;


use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;

class MessageCollection extends Collection
{
    public function markAsRead()
    {

        $this->each(function($message){
            if($message->to_user_id == Auth::id()) {
                $message->markAsRead();
            }
        });

    }
}
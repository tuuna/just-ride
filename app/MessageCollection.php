<?php
/**
 * Created by PhpStorm.
 * User: tuuna
 * Date: 17-3-21
 * Time: 下午6:12
 */

namespace App;


use Illuminate\Database\Eloquent\Collection;

class MessageCollection extends Collection
{
    public function markAsRead()
    {
        $this->each(function($message){
            $message->markAsRead();
        });
    }
}
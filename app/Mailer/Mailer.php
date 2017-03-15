<?php
/**
 * Created by PhpStorm.
 * User: tuuna
 * Date: 17-3-15
 * Time: 下午2:23
 */

namespace App\Mailer;


use Mail;

class Mailer
{
    public function sendTo($view,array $data,$email,$msg)
    {
        Mail::send(
            $view,
            $data,
            function($message) use ($email,$msg) {
                $message->to($email)
                    ->subject($msg);
            }
        );
    }
}
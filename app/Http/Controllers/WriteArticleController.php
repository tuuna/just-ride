<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WriteArticleController extends AppController
{
    public function index()
    {
        $categories = $this->parent();
        return view('write.index',['categories' => $categories]);
    }
}

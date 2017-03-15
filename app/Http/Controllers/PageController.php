<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends AppController
{
    public function index()
    {
        $categories = $this->parent();
        return view('page.page',compact('categories'));
    }
}

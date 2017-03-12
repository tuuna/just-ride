<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtlistController extends Controller
{
    public function index()
    {
        return view('article.list');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageListController extends Controller
{
    public function index()
    {
        return view('image.imagelist');
    }
}

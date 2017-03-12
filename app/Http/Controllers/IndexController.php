<?php

namespace App\Http\Controllers;

use App\Repositories\IndexInfoRepository;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    protected $articles,$categories;

    public function __construct(IndexInfoRepository $articles,
                                IndexInfoRepository $categories)
    {
        $this->articles = $articles;
        $this->categories = $categories;
    }

    public function index()
    {
        $categories = $this->categories->getAllCategories();
        return view('home.index');
    }
}

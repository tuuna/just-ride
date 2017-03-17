<?php

namespace App\Http\Controllers;

use App\Repositories\IndexInfoRepository;
use Illuminate\Http\Request;

class AppController extends Controller
{
    protected $categories;

    public function __construct(IndexInfoRepository $categories)
    {
        $this->categories = $categories;
    }

    public function parent()
    {
        return $this->categories->getAllCategories();
    }

    public function allCategories()
    {
        return $this->categories->allCategories();
    }
}

<?php

namespace App\Http\Controllers;

use App\Repositories\IndexInfoRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function messageCount()
    {
        return Auth::check() ?
                 Auth::user()->messages->count() :
                 '';
    }
}

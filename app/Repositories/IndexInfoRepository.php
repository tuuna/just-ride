<?php
/**
 * Created by PhpStorm.
 * User: tuuna
 * Date: 17-3-12
 * Time: 下午7:32
 */

namespace App\Repositories;


use App\Cate;

class IndexInfoRepository
{
    public function getAllCategories()
    {
        return tree(Cate::get());
    }

    public function tree($data)
    {

    }
}
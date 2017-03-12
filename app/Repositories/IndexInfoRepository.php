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
        return $this->tree(Cate::get());
    }

    public function tree($data,$name='child',$parent_id = 0)
    {
        $arr = array();
        foreach ($data as $v) {
            if ($v['parent_id'] == $parent_id) {
                $v[$name] = self::tree($data, $name, $v['id']);
                $arr[] = $v;
            }
        }
        return $arr;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: tuuna
 * Date: 17-3-12
 * Time: 下午6:58
 */

namespace App\Admin\Exceptions;
use Encore\Admin\Form\Field;


class WangEditor extends Field
{
    protected $view = 'admin::form.editor';

    protected static $css = [
        '/packages/wangEditor-2.1.23/dist/css/wangEditor.min.css',
    ];

    protected static $js = [
        '/packages/wangEditor-2.1.23/dist/js/wangEditor.js',
    ];

    public function render()
    {
        $this->script = <<<EOT

var editor = new wangEditor('{$this->id}');
    editor.create();

EOT;
        return parent::render();

    }
}
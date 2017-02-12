<?php

/* 
 * 验证器 文章添加及修改的验证
 */
namespace app\admin\validate;

use think\Validate;

class Article extends Validate
{
     protected $rule =   [
        'title' => 'require|max:60|unique:article' ,   //unique:cate 验证数据唯一性的，后面的是数据表名
        'keywords' => 'require',
    ];

    protected $message  =   [
        'title.require' => '文章名称不能为空',
        'title.unique' =>'文章名称不能重复',
        'title.max' => '文章名称不能大于30位！', 
        'keywords.require' => '文章关键字不能为空！'
    ];
    //验证场景
     protected $scene = [
        'edit'  =>  ['keywords','title'=>'require|max:60'],     //还可以重定义验证规则
    ];
}
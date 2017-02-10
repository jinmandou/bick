<?php

/* 
 * 验证器，cate的，及栏目添加及修改的验证
 */
namespace app\admin\validate;

use think\Validate;

class Cate extends Validate
{
     protected $rule =   [
        'catename' => 'require|max:20|unique:cate' ,   //unique:cate 验证数据唯一性的，后面的是数据表名
         'keyword' => 'require'
    ];

    protected $message  =   [
        'catename.require' => '栏目名称不能为空',
        'catename.unique' =>'栏目名称不能重复',
        'catename.max' => '栏目名称不能大于10位！', 
        'keyword.require' => '栏目关键字不能为空！'
    ];

}
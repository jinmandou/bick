<?php
namespace app\admin\validate;

use think\Validate;

class Link extends Validate
{
    protected $rule = [
        'title'  =>  'require|max:25|unique:link',
        'url'  =>  'require|url',
    ];

    protected $message  =   [
        'title.require' => '链接标题不能为空！',  
        'title.unique' => '链接标题不能重复！',  
        'title.max' => '链接标题不能大于25位！', 
        'url.require' => '链接地址不能为空！', 
        'url.url' => '链接地址格式不正确'

    ];

     //验证场景
     protected $scene = [
        'edit'  =>  ['url','title'=>'require|max:25'],     //还可以重定义验证规则
    ];

}
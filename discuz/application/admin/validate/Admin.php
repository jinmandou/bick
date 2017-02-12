<?php
namespace app\admin\validate;

use think\Validate;

class Admin extends Validate
{
    protected $rule = [
        'username'  =>  'require|max:25|unique:admin',     //注意，检测重复的后面跟的数据库名
        'password'  =>  'require|alphaNum',
    ];

    protected $message = [
        'username.require' => '管理员名称不能为空！',  
        'username.unique' => '管理员名称不能重复！',  
        'username.max' => '密码不能大于25位！', 
        'password.require' => '密码不能为空！', 
        'password.alphaNum' => '密码格式不正确'
    ];

     //验证场景,这里是修改
     protected $scene = [
        'edit'  =>  ['password' =>'alphaNum','username'],     //还可以重定义验证规则
    ];

}
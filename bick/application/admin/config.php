<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    // +----------------------------------------------------------------------
    // | 应用设置
    // +----------------------------------------------------------------------
    
 	'template'               => [
        // 模板引擎类型 支持 php think 支持扩展
        'type'         => 'Think',
        // 模板路径
        'view_path'    => __DIR__ .'/template/',
        // 模板文件名分隔符
        'view_depr'    => "_",
        'view_suffix'  => 'html',
    ],

   
    // 默认跳转页面对应的模板文件
    'dispatch_success_tmpl'  => 'Jump/index',
    'dispatch_error_tmpl'    => 'Jump/index',
    
    // 视图输出字符串内容替换
    'view_replace_str'  =>  [
    '__PUBLIC__'=>'/template/',
    '__ROOT__' => '/',
    '__ADMIN__' => '/template/admin',
    ],

    //一些简单常量设置
    "web_title"   => "劲松CMS",
    'default_img' =>'/template/admin/images/user.jpg'   //默认图
];

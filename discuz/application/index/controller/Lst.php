<?php
/* 
 列表页   楚鸟 615276057@qq.com  2017-02-07
 */
namespace app\index\controller;
use think\Controller;
class lst extends Controller
{
    public function index()
    {
        return $this->fetch();
     }
}
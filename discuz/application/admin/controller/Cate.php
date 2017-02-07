<?php
namespace app\admin\controller;
use think\Controller;
class Cate extends Controller
{
    public function index()
    {
        return $this->fetch();
     }
     //栏目列表
    public function lst()
    {
        return $this->fetch();
     }
    //增加栏目
    public function add()
    {
        return $this->fetch();
     }
}
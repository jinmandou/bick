<?php
namespace app\index\controller;
use think\Controller;

class Base extends Controller{
    public function _initialize(){
       $this ->nav();
    }
    public function nav(){
        $navers = \think\Db::name('cate')->order('id desc')->select();
        $this->assign('nav',$navers);
    }
}

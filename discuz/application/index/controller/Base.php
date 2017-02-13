<?php
namespace app\index\controller;
use think\Controller;

class Base extends Controller{
    public function _initialize(){
       $this ->nav();
       $this->tags();
       $this->url();
    }
    
    //导航
    public function nav(){
        $navers = \think\Db::name('cate')->order('id desc')->select();
        $this->assign('nav',$navers);
    }
    
    //tag标签
    public function tags(){
        $article= \think\Db::name('article')->field('id,keywords')->order('id desc')->select();
        $temp = array();
        foreach ($article as $k=>$v){
            $arr  = explode(',', $v['keywords']);
            $temp = array_merge($temp,$arr);       //数组合并成一个   
        }
        $tagstab = array_count_values($temp); //返回一个关联数组，用 input数组中的值作为键名，该值在数组中出现的次数作为值。
        $this->assign('tagstab',$tagstab);
    }
    
    //url 友情链接
    public function url() {
        $linktab= \think\Db::name('link')->order('id desc')->select();
        $this->assign('linktab',$linktab);
    }
    
}

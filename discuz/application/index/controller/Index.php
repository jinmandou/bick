<?php
namespace app\index\controller;
use app\index\controller\Base;
class Index extends Base
{
    public function index()
    {
        $artres= \think\Db::name('article')->alias('a')->join('cate c','c.id = a.cateid','LEFT')->field('a.id,a.title,a.pic,a.time,a.desc,a.click,a.keywords,c.catename,a.content,a.click')->order('a.id desc')->paginate(10);
    	$cates = \think\Db::name('cate')->field('catename')->find(input('cateid'));   //项目分类
        $this->assign('catename',$cates['catename']);
        $this->assign('artres',$artres);
        return $this->fetch();
        }
}

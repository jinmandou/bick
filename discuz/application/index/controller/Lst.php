<?php
/* 
 列表页   楚鸟 615276057@qq.com  2017-02-07
 */
namespace app\index\controller;
use app\index\controller\Base;
class lst extends Base
{
    public function index()
    {   
        $cates = \think\Db::name('cate')->field('catename')->find(input('cateid'));   //先找出项目分类名字
    	$catename = $cates['catename'];
        $artres = \think\Db::name('article')->order('id desc')->where('cateid','=',input('cateid'))->paginate(10);
        // trace($artres);
        
    	$this->assign('artres',$artres);
    	$this->assign('catename',$catename);
        $this ->assign('page',$artres ->render());  //分页
        
        return $this->fetch();
     }
}
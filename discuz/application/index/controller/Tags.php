<?php
namespace app\index\controller;
class Tags extends Base
{
    public function index()
    {
    	$tags=input('tags');
    	$map['a.keywords']  = ['like','%'.$tags.'%'];
        //下面是联表查询
    	$artres= \think\Db::name('article')->alias('a')->join('cate c','c.id = a.cateid','LEFT')->field('a.id,a.title,a.pic,a.time,a.desc,a.click,a.keywords,a.content,c.catename')->order('a.id desc')->where($map)->paginate(2);
    	$this->assign('artres',$artres);
        $this ->assign('page',$artres ->render());  //分页
        return $this->fetch('lst');
    }
}

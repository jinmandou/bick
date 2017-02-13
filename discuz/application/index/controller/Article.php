<?php
//文章详情页面
namespace app\index\controller;
use think\Controller;
class Article extends Base
{
    public function index()
    {
    	$id=input('artid');
    	db('article')->where('id', $id)->setInc('click');  //递增加1
    	$arts=\think\Db::name('article')->alias('a')->join('cate c','c.id = a.cateid','LEFT')->field('a.keywords,a.title,a.content,a.time,a.click,a.id,a.cateid,c.catename')->find($id);
    	$prev= \think\Db::name('article')->where('id','<',$id)->where('cateid','=',$arts['cateid'])->order('id desc')->limit(1)->value('id');
    	$next= \think\Db::name('article')->where('id','>',$id)->where('cateid','=',$arts['cateid'])->order('id asc')->limit(1)->value('id');
    	$ralateres = $this->ralate($arts['keywords']);
    	// var_dump($ralateres); die;
        $web['title'] = $arts['title'];
        $web['keywords'] = $arts['keywords'];
        $this->assign('web',$web);
    	$this->assign('arts',$arts);
    	$this->assign('prev',$prev);
    	$this->assign('next',$next);
    	$this->assign('ralateres',$ralateres);
        return $this->fetch();
    }

    //相关文章
    public function ralate($keywords){
    	$arr=explode(',', $keywords);
    	// var_dump($arr); die;
    	static $ralateres=array();
    	foreach ($arr as $k => $v) {
    		$map['keywords']  = ['like','%'.$v.'%'];
    		$artres= \think\Db::name('article')->order('id desc')->where($map)->limit(10)->field('id,title,time')->select();
    		$ralateres=array_merge($ralateres,$artres);
    	}
        //维数组去重复
        $temp = [];
        foreach ($ralateres as $key =>$vo){
            $temp[$vo['id']] = $vo ;
        }
    	return $temp ;
    }
}

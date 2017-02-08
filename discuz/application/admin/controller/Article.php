<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\validate;

class Article extends Controller
{
    public function index()
    {
        return $this->fetch();
     }
     //栏目列表，注意这里简单的同时实现了分页
    public function lst()
    {
        //多表查询，具体见手册链式操作
        $article = \think\Db::name('article')->alias('a')->join('cate c','c.id = a.cateid','LEFT')->field('a.id,a.title,a.pic,a.click,a.time,c.catename')->paginate(10);
        $this ->assign('page',$article->render());  //分页
        $this->assign('article',$article);
        return $this->fetch();
     }
    //增加栏目
    public function add()
    {
        //判断提交及接收
        if(request()->isPost()){
            $data =array(
            'title' => input('title'),
            'keywords'  => input('keywords'),
            'desc' => input('desc'),
            'content' => input('content'),
            'cateid' => input('cateid'),
            'click' => input('click')?input('click'):0,   //三元运算，没数据过来则为0
            'time' => time(),
            );
            
           if($_FILES['pic']['tmp_name']){  //检测图片是否上传
               $pic =  $this->upload();
               if($pic['info']== 1){ 
                   $data['pic'] = '/uploads/'.$pic['savename'];
               }  else {
                   return $pic['err'];
               }
           }  
            $result = $this->validate($data,'Article');  //验证库去验证
            if(true !== $result){
                // 验证失败 输出错误信息
                return ($result);
            }
            
            
            //sql添加及验证
            $db = \think\Db::name('article')->insert($data);
            if($db){
                return $this->success("添加文章成功！","lst");
            }else{
                return $this->success("添加文章失败！");
            }
            
        }
        $cateres=db('cate')->select();
        $this->assign('cateres',$cateres);
        return $this->fetch();
     }
     //删除
     public function del(){
        $id = input('id');
    	if(db('link')->delete($id)){
    		return $this->success('删除栏目成功！','lst');
    	}else{
    		return $this->error('删除栏目失败！');
    	}    
     }
     
     //修改
     public function  edit(){
        if(request()->isPost()){
            $data =array(
            'id'=>input('id'),
            'title' => input('title'),
            'keywords'  => input('keywords'),
            'desc' => input('desc'),
            'content' => input('content'),
            'cateid' => input('cateid'),
            'click' => input('click')?input('click'):0,   //三元运算，没数据过来则为0
            'time' => time(),
            );
            
           if($_FILES['pic']['tmp_name']){  //检测图片是否上传
               $pic =  $this->upload();
               if($pic['info']== 1){ 
                   $data['pic'] = '/uploads/'.$pic['savename'];
               }  else {
                   return $pic['err'];
               }
           }  
           $validate = validate('Article');   //使用助手函数实例化验证器
            if(!$validate->scene('edit')->check($data)){
                return $validate->getError();
            }
            
            //sql添加及验证
            $db = \think\Db::name('article')->update($data);
            if($db){
                return $this->success("修改文章成功！","lst");
            }else{
                return $this->success("修改文章失败！");
            }
            
        }
        $arts= \think\Db::name('article')->find(input('id'));
        $cateres=db('cate')->select();
        $this->assign('cateres',$cateres);
        $this->assign('arts',$arts);
        return $this->fetch();
     }
     
     
     //图片上传代码
     private  function upload(){
        // 获取表单上传文件 例如上传了001.jpg,具体使用看手册
        $file = request()->file('pic'); //这里的pic根据html里的name来
        // 移动到框架应用根目录/public/uploads/ 目录下
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
        $reubfo = array();  //定义一个返回的数组
        if($info){
            $reubfo['info']= 1;
            $reubfo['savename'] = $info->getSaveName();
        }else{
            // 上传失败获取错误信息
            $reubfo['info']= 0;
            $reubfo['err'] = $file->getError();;
        }
        return $reubfo;
    }
     
     
     
     
     
}
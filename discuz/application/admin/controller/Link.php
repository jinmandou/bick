<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\validate;   //引入验证库
class Link extends Controller
{
    public function index()
    {
        return $this->fetch();
     }
     //栏目列表
    public function lst()
    {
        $cateres = \think\Db::name('link') ->paginate(10);
        $this ->assign('page',$cateres ->render());  //分页
        $this->assign('cateres',$cateres);
        return $this->fetch();
     }
    //增加栏目
    public function add()
    {
        //判断提交及接收
        if(request()->isAjax()){
            $data =array(
            'title' => input('title'),
            'url'=>input('url'),
            'desc'=>input('desc'),
            );
            $result = $this->validate($data,'Link');  //去验证器验证
            if(true !== $result){
                // 验证失败 输出错误信息
                $ret["message"]= $result;
                $ret["status"] = 0;   //这个值决定成功失败，不为1则失败
                return $ret;
            }         
            //sql添加及验证
            $db = \think\Db::name('link')->insert($data);
            if($db){
                $ret["message"]= "添加栏目成功！";
                $ret["status"] = 1;   
                $ret["url"] = url("lst"); 
            }else{
                $ret["message"]= "添加栏目失败！";
                $ret["status"] = 1; 
            }
          return $ret;
        }
        return $this->fetch();
     }
     
     //删除
     public function del(){
        if(request()->isPost()){
            $id = input("id");
            if(db('link')->delete($id)){
                $ret["message"]= "删除栏目成功！";
                $ret["status"] = 1;   
                $ret["url"] = url("lst"); 
            }else{
                $ret["message"]= "删除栏目失败！";
                $ret["status"] = 0;   
            }
            return $ret;
        }
     }
     
     //修改
     public function  edit(){
        if(request()->isPost()){
                $data =array(
                'id' => input('id'),
                'title' => input('title'),
                'url'=>input('url'),
                'desc'=>input('desc'),
                );
                $validate = validate('Link');   //使用助手函数实例化验证器
                if(!$validate->scene('edit')->check($data)){
                    $ret["message"]= $validate->getError();
                    $ret["status"] = 0;   //这个值决定成功失败，不为1则失败
                    return $ret;
                }
                //sql添加及验证
                $db = \think\Db::name('link')->update($data);      //$db=0时表示没有任何修改
                if($db or $db ===0 ){
                    $ret["message"]= "修改栏目成功！";
                    $ret["status"] = 1;   
                    $ret["url"] = url("lst"); 
                }else{
                    $ret["message"]= "修改栏目失败！";
                    $ret["status"] = 1; 
                }
             return $ret;
            }
        $id = input('id');
    	$data = db('link')->where('id',$id)->find();
    	$this->assign('data',$data);
    	return $this->fetch();
        
     }
     
     
     
     
     
     
     
}
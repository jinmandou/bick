<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use app\admin\validate;   //引入验证库
class Admin extends Base
{
    public function index()
    {
        return $this->fetch();
     }
     //管理员列表
    public function lst()
    {
        $cateres = \think\Db::name('admin') ->paginate(10);
        $this ->assign('page',$cateres ->render());  //分页
        $this->assign('cateres',$cateres);
        return $this->fetch();
     }
    //增加管理员
    public function add()
    {
        //判断提交及接收
        if(request()->isAjax()){
            $data =array(
            'username' => input('username'),
            'password'=> input('password'),
            );
            $result = $this->validate($data,'Admin');  //去验证器验证
            if(true !== $result){
                // 验证失败 输出错误信息
                $ret["message"]= $result;
                $ret["status"] = 0;   //这个值决定成功失败，不为1则失败
                return json($ret);
            } 
            $data['password'] = md5($data['password'] );
            //sql添加及验证
            $db = \think\Db::name('admin')->insert($data);
            if($db){
                $ret["message"]= "添加管理员成功！";
                $ret["status"] = 1;   
                $ret["url"] = url("lst"); 
            }else{
                $ret["message"]= "添加管理员失败！";
                $ret["status"] = 1; 
            }
          return json($ret);
        }
        return $this->fetch();
     }
     
    
     
     //修改
     public function  edit(){
        if(request()->isPost()){
                $id = input("id");
                $cateres = \think\Db::name('admin') ->find($id);
                $password = $cateres["password"];
                $username = $cateres["username"];
                $isgd = input('password');
                if($username == input('username') and empty($isgd )) {   //判断如果未做改动就不更改,注意empty不能判断函数
                    $ret["message"]= "未做更改";
                    $ret["status"] = 1;   //这个值决定成功失败，不为1则失败
                    $ret["url"] = url("lst"); 
                    return json($ret);   
                }
                $data =array(
                'id' => input("id"),
                'username' => input('username'),
                'password'=> input('password')? input('password'):$password,
                );
                $validate = validate('Admin');   //使用助手函数实例化验证器
                if(!$validate->scene('edit')->check($data)){
                    $ret["message"]= $validate->getError();
                    $ret["status"] = 0;   //这个值决定成功失败，不为1则失败
                    return json($ret);
                }
                //sql添加及验证
                $db = \think\Db::name('admin')->update($data);      //$db=0时表示没有任何修改
                if($db or $db ===0 ){
                    $ret["message"]= "修改管理员成功！";
                    $ret["status"] = 1;   
                    $ret["url"] = url("lst"); 
                }else{
                    $ret["message"]= "修改管理员失败！";
                    $ret["status"] = 1; 
                }
             return json($ret);
            }
        $id = input('id');
    	$data = db('admin')->where('id',$id)->find();
    	$this->assign('data',$data);
    	return $this->fetch();   
     }
     
      //删除
     public function del(){
        if(request()->isPost()){
            $id = input("id");
            if($id==1){
                $ret["message"]= "初始管理员不能删除！";
                $ret["status"] = 0; 
            }
            return json($ret);
            if(db('admin')->delete($id)){
                $ret["message"]= "删除管理员成功！";
                $ret["status"] = 1;   
                $ret["url"] = url("lst"); 
            }else{
                $ret["message"]= "删除管理员失败！";
                $ret["status"] = 0;   
            }
            return json($ret);
        }
     }
     
     
     
     
     
}
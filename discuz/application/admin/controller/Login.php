<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Login as Log;     //引入登录模型
class Login extends Controller
{
    public function index()
    {
        if(request()->isPost()){
            $login = new Log;
            $status=$login->login(input('username'),input('password'));
            $ret["status"] = $status;
            if($status==1){
                $ret["url"] = url("index/index"); 
                $ret["message"] = "登录成功，正在跳转";
            }elseif($status==2){
                $ret["message"] = '账号或者密码错误!';
            }else{
                $ret["message"] = '用户不存在!';
            }
            return json($ret);  
        }
        return $this->fetch('login');
    }

    public function logout(){
        session(null);
        return $this->success('退出成功！',url('index'));
    }


    













}

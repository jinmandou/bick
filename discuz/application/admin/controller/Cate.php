<?php
namespace app\admin\controller;
use think\Controller;
//use app\admin\validate;   //引入验证库
class Cate extends Controller
{
    public function index()
    {
        return $this->fetch();
     }
     //栏目列表
    public function lst()
    {
        $cateres = \think\Db::name('cate') ->paginate(10);
        $this ->assign('page',$cateres ->render());  //分页
        $this->assign('cateres',$cateres);
        return $this->fetch();
     }
    //增加栏目
    public function add()
    {
        //判断提交及接收
        if(request()->isPost()){
            $data =array(
            'catename' => input('catename'),
            'keyword'  => input('keyword'),
            'desc' => input('desc'),
            'type' => input('type')?input('type'):0,   //三元运算，没数据过来则为0
            );
            //先用验证库添加及验证
            /**这个也有用，后面用了手册上的控制器认证简化方法
            $validate = validate('Cate');   //使用助手函数实例化验证器
            if(!$validate->check($data)){
                return $validate->getError();
            } **/
            $result = $this->validate($data,'Cate');
            if(true !== $result){
                // 验证失败 输出错误信息
                return ($result);
            }
            
            //sql添加及验证
            $db = \think\Db::name('cate')->insert($data);
            if($db){
                return $this->success("添加栏目成功！","lst");
            }else{
                return $this->success("添加栏目失败！");
            }
            
        }
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
             'id' => input('id'),
            'catename' => input('catename'),
            'keyword'  => input('keyword'),
            'desc' => input('desc'),
            'type' => input('type')?input('type'):0,   //三元运算，没数据过来则为0
            );
            $result = $this->validate($data,'Cate');
            if(true !== $result){
                // 验证失败 输出错误信息
                return ($result);
            }
            //sql添加及验证
            $db = \think\Db::name('cate')->update($data);
            if($db){
                    return $this->success("修改栏目成功！","lst");
                }else{
                    return $this->success("修改栏目失败！");
                }
              
            }
        $id = input('id');
    	$data = db('cate')->where('id',$id)->find();
    	$this->assign('data',$data);
    	return $this->fetch();
     }
     
     
     
     
     
     
     
     
}
<?php
//曹国伟
//2017年2月18日16:57:30
namespace Admin\Controller;
use Think\Controller;
class ManagerController extends Controller{
	//显示用户登录页面
	public function index(){
		$this->display();
	}
	//用户登录检测
     public function login(){
        $data['name'] = trim($_POST['username']);
        $data['pwd'] = trim($_POST['loginpwd']);
        $res = M('manager')->where($data)->find();
        //判断用户名是否存在
        if ($res){
            session("name", $data['name']);
            $result['status'] = 0;
            $result['content'] = '';
            $this->ajaxReturn($result);
        }else{
            $result['status'] = 1;
            $result['content'] = '用户名或密码不正确';
            $this->ajaxReturn($result);
        }
     	
     }
    //用户退出登录
     public function loginlogout(){
     	session(null);
    	$this->redirect('Manager/index');
     }
}
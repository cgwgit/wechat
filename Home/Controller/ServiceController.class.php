<?php
//曹国伟
//2017年2月7日10:31:23
namespace Home\Controller;
use Think\Controller;
class ServiceController extends Controller {
	public function _initialize(){
	    if ($_SESSION['username'] == NULL) {
	        $this->success('请先登陆', U('Manager/login'),1);
	        exit();
	    }
    }

    public function index(){
    	$this->display();
    }
}
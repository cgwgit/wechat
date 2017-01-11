<?php
//曹国伟
//2017年1月7日16:22:09
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function _initialize() {
        if ($_SESSION['username'] == NULL) {
            $this->success('请先登陆', U('Manager/login'),1);
            exit();
        }
    }
	//展示首页面
    public function index(){
       $this->display();
    }
    //公积金查询
    public function gj(){
        $this->display();
    }

    //购买公积金
    public function gj_buy(){
        $this->display();
    }
    //保费计算
    public function premium(){
    	$this->display();
    }
}
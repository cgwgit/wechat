<?php
//曹国伟
//2017年1月10日15:50:41
namespace Home\Controller;
use Think\Controller;
class TinfoController extends Controller{
	//添加投保人的用户信息展示页面
	public function addtinfo(){
		$uid = I('get.uid');
		if($uid){
           $tinfo = M('tinfo')->where(array('uid' => $uid))->find();
           $this->assign('tinfo', $tinfo);
		   $this->display();
		}else{
           $this->display();
		}
	}
	//投保人信息提交页面
	public function savetinfo(){
		$data = I('post.');
		$rst = M('tinfo')->where(array('uid' => session('uid')))->find();
		if($rst){
           M('tinfo')->where(array('uid' => session('uid')))->save($data);
           $this->redirect('Social/orderinfo');
		}else{
		   $data['uid'] = session('uid');
           M('tinfo')->add($data);
           $this->redirect('Social/orderinfo');
		}
	}
}
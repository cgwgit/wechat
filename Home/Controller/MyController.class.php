<?php
//曹国伟
//2017年1月11日15:33:27
namespace Home\Controller;
use Think\Controller;
class MyController extends Controller{
		public function _initialize() {
	    if ($_SESSION['username'] == NULL) {
	        $this->success('请先登陆', U('Manager/login'),1);
	        exit();
	    }
    }
	//显示我的前程保首页面
	public function myinfo(){
      $this->display();
	}
	// 得到用户的全部订单
	public function order(){
		$orders = M('cinfo')->field('`tp_cinfo`.`cname`,`ch`.*')->join('`tp_chargedetail` as `ch` on `tp_cinfo`.`id` = `ch`.`cid`')->where('`tp_cinfo`.`uid`='.session('uid'))->select();
		$this->assign('orders', $orders);
		$this->display();
	}
	//得到待支付的订单
	public function norder(){
		$orders = M('cinfo')
		   ->field('`tp_cinfo`.`cname`,`ch`.*')
		   ->join('`tp_chargedetail` as `ch` on `tp_cinfo`.`id` = `ch`.`cid`')
		   ->where('`tp_cinfo`.`uid`='.session('uid').' and `ch`.`order_status`="0"')
		   ->select();
		$this->assign('orders', $orders);
		$this->display();
	}
	//订单详细信息
	public function orderdetail(){
		$orderid = I('get.id');
		$detailinfo = M('chargedetail')
		             ->alias('`ch`')
		             ->field('`ch`.`order_sn`,`ch`.`chargecount`,`ch`.`servicemoney`,`ch`.`allcount`,`c`.`cname`,`c`.`idnumber`,`tp_city`.`city`,`c`.`htype`')
		             ->join('`tp_cinfo` as `c` on `ch`.`cid`=`c`.`id`')
		             ->join('`tp_city` on `c`.`id`=`tp_city`.`cid`')
		             ->where('`ch`.`id`='.$orderid)->find();
        $this->assign('detailinfo', $detailinfo);
        $this->display();
	}
	//我的参保人(以参保)
	public function ycperson(){
       $yperson = M('cinfo')
                  ->field('cname,tp_cinfo.city,idnumber,htype')
			      ->join('tp_chargedetail on tp_cinfo.id=tp_chargedetail.cid')
			      ->where("tp_chargedetail.order_status='1' and tp_cinfo.uid=".session('uid'))->select();
	    $this->assign('yperson', $yperson);
	    $this->display();
	}

	//待参保的参保人
	public function ncperson(){
       $yperson = M('cinfo')
          ->field('cname,tp_cinfo.city,idnumber,htype')
	      ->join('tp_chargedetail on tp_cinfo.id=tp_chargedetail.cid')
	      ->where("tp_chargedetail.order_status='0' and tp_cinfo.uid=".session('uid'))->select();
	    $this->assign('nperson', $nperson);
	    $this->display();
	}

}
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
    // $id = I('get.id');
    // if($id){
    //  $orders = M('cinfo')->field('`tp_cinfo`.`cname`,`tp_cinfo`.`idnumber`,`tp_cinfo`.`city` as `citys`,`tp_city`.city,`ch`.*')->join('`tp_chargedetail` as `ch` on `tp_cinfo`.`id` = `ch`.`cid`')->join('tp_city on tp_cinfo.id=tp_city.cid')->where('`tp_cinfo`.`uid`='.session('uid').' and `ch`.`id` = '.$id )->find();
    //  if($orders){
      
    //   $this->assign('orders', $orders);
    //   $this->display('orderdetail');exit;
    //  }
    // }else{
     $orders = M('cinfo')->field('`tp_cinfo`.`cname`,`ch`.*')->join('`tp_chargedetail` as `ch` on `tp_cinfo`.`id` = `ch`.`cid`')->where('`tp_cinfo`.`uid`='.session('uid'))->select();
     $this->assign('orders', $orders);
     $this->display(); 
    // }
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
		             ->field('`ch`.`order_sn`,`ch`.`order_status`,`ch`.`ordertime`,`ch`.`chargecount`,`ch`.`servicemoney`,`ch`.`allcount`,`c`.`cname`,`c`.`city` as citys,`c`.`idnumber`,`tp_city`.`city`,`c`.`htype`')
		             ->join('`tp_cinfo` as `c` on `ch`.`cid`=`c`.`id`')
		             ->join('`tp_city` on `c`.`id`=`tp_city`.`cid`')
		             ->where('`ch`.`id`='.$orderid)->select();
       foreach ($detailinfo as $key => $value) {
          $arr = explode(',', $value['citys']);
          $rst = M('area')->where(array('id' => $arr['0']))->find();
          $detailinfo[$key]['province'] = $rst['name']; 
          $rst = M('area')->where(array('id' => $arr['1']))->find();
          $detailinfo[$key]['citys'] = $rst['name']; 
          $rst = M('area')->where(array('id' => $arr['2']))->find();
          $detailinfo[$key]['county'] = $rst['name'];
      }
      // var_dump($detailinfo);die;
        $this->assign('detailinfo', $detailinfo);
        $this->display();
	}
	//我的参保人(以参保)
	public function ycperson(){
        $yperson = M('cinfo')->where(array('status' => '1','uid' => session('uid')))->select();
        foreach ($yperson as $key => $value) {
          $arr = explode(',', $value['city']);
          $rst = M('area')->where(array('id' => $arr['0']))->find();
          $yperson[$key]['province'] = $rst['name']; 
          $rst = M('area')->where(array('id' => $arr['1']))->find();
          $yperson[$key]['citys'] = $rst['name']; 
          $rst = M('area')->where(array('id' => $arr['2']))->find();
          $yperson[$key]['county'] = $rst['name'];
      }
	    $this->assign('yperson', $yperson);
	    $this->display();
	}

	//待参保的参保人
	public function ncperson(){
        // echo session('uid');die;
       // $ncperson = M('cinfo')
       //    ->field('cname,tp_cinfo.city,idnumber,htype')
	      //   ->join('tp_chargedetail on tp_cinfo.id=tp_chargedetail.cid')
	      //   ->where("tp_chargedetail.order_status='0' and tp_cinfo.uid=".session('uid'))
       //    ->select();
        $ncperson = M('cinfo')->where(array('status' => '0','uid' => session('uid')))->select();
        foreach ($ncperson as $key => $value) {
          $arr = explode(',', $value['city']);
          $rst = M('area')->where(array('id' => $arr['0']))->find();
          $ncperson[$key]['province'] = $rst['name']; 
          $rst = M('area')->where(array('id' => $arr['1']))->find();
          $ncperson[$key]['citys'] = $rst['name']; 
          $rst = M('area')->where(array('id' => $arr['2']))->find();
          $ncperson[$key]['county'] = $rst['name'];
        }
	      $this->assign('ncperson', $ncperson);
	      $this->display();
	}
    //显示我的账号设置
    public function Mysetinfo(){
        $user = M('user')->where(array('id' => session('uid')))->find();
        $tinfo = M('tinfo')->where(array('uid' => $user['id']))->find();
        if($tinfo != NULL){
           $sql = "SELECT * FROM `tp_area` WHERE `id` IN ({$tinfo['area']})";
           $area = M()->query($sql);
           $this->assign('area', $area);
           $this->assign('tinfo', $tinfo);
        }
        $this->assign('user', $user);
    	  $this->display();
    }
    //验证手机号码
    public function edittel(){
    	if(IS_POST){
             preg_match("/^1[3578][0-9]{9}$/", I('post.telphone')) ? $telphone = trim(I('post.telphone')) : $err = '请填写正确的手机号';
             if($err){
                $this->error($err,U('edittel'),1);exit;
             }
    		 $telrst = M('user')->where(array('tel' => $telphone))->find();
    		 if($telrst){
	    		if(trim(I('post.checkcode')) == cookie('code') && I('post.checkcode') !=NULL){
                        $this->redirect('bangdingtel');exit;  
	            }else{
	           	$this->error('验证码不正确',U('edittel'), 1);exit;
	           }
    		 }else{
                $this->error('原手机号不存在，请重新输入',U('edittel'), 1);exit;
    		 }
    	}else{
    		$this->display();exit;
    	}
    }
    //修改手机号码
    public function bangdingtel(){
        if(IS_POST){
             preg_match("/^1[3578][0-9]{9}$/", I('post.telphone')) ? $telphone = trim(I('post.telphone')) : $err = '请填写正确的手机号';
             if($err){
                $this->error($err,U('bangdingtel'),1);exit;
             }
             if(trim(I('post.checkcode')) == cookie('code') && I('post.checkcode') !=NULL){
                        $data = array(
                           'id' => session('uid'),
                            'tel' => $telphone
                            );
                        $rst = M('user')->save($data);  
                        if($rst){
                            $this->success('修改手机号成功', U('Mysetinfo'), 1);exit;
                        }
                }else{
                $this->error('验证码不正确',U('edittel'), 1);exit;
             }
             }else{
                $this->display();exit;
        }
    }
    //修改登录密码
    public function editpwd(){
    	if(IS_POST){
            preg_match("/^1[3578][0-9]{9}$/", I('post.telphone')) ? $telphone = trim(I('post.telphone')) : $err = '请填写正确的手机号';
            if($err){
                $this->error($err, U('editpwd'),1);exit;
            }
		   $telrst = M('user')->where(array('tel' => $telphone))->find();
		   if($telrst){
	           if(trim(I('post.checkcode')) == cookie('code') && I('post.checkcode') !=NULL){
	              $uid = session('uid');
	              $pwd = I('post.pwd');
	              $data = array(
	                 'id' => $uid,
	                 'pwd' => $pwd
	              	);
	              $rst = M('user')->save($data);
	              if($rst){
	              	$this->success('密码修改成功', U('Mysetinfo'), 1);exit;
	              }
	           }else{
	           	 $this->error('验证码不正确',U('editpwd'), 1);exit;
	           }
            }else{
            	$this->error('手机号不正确',U('editpwd'),1);exit;
            }
    	}else{
    		$this->display();
    	}
    }

    //显示二维码
    public function erweima(){
    	$this->display();
    }
    //修改投保人用户姓名
    public function editusername(){
    	if(IS_POST){
          $username = I('post.username');
          $tinfo = M('tinfo')->where(array('uid' => session('uid')))->find();
          $data = array(
             'id' => $tinfo['id'],
             'tname' => $username
          	);
          $rst = M('tinfo')->save($data);
          if($rst){
          	$this->redirect('Mysetinfo');exit;
          }
    	}else{
    		$this->display();
    	}
    }

    //修改登录的用户姓名
    public function loginusername(){
    	if(IS_POST){
            $loginusername = I('post.username');
            $data = array(
              'id' => session('uid'),
              'username' => $loginusername
            	);
            $rst = M('user')->save($data);
            if($rst){
            	$this->redirect('Mysetinfo');exit;
            }
    	}else{
    		$this->display();
    	}
    }

    //修改电子邮箱
    public function editemail(){
    	if(IS_POST){
         $pattern = "/[a-zA-Z0-9][a-zA-Z0-9_\\-\\.]{5,19}@(?:[a-zA-Z0-9\\-]+\\.)+[a-zA-Z]+/";
    	 preg_match($pattern, $_POST['email']) ? $email = trim($_POST['email']) : $err = '请输入正确的邮箱地址';
    	 if($err){
    	 	$this->error($err,U('Mysetinfo'),1);exit;
    	 }
    	}else{
    		$this->display();
    	}
    }
    //修改用户地址
    public function editaddress(){
        if(IS_POST){
          $post = I('post.');
          $rst = M('tinfo')->where(array('uid' => session('uid')))->find();
          $data = array(
               'id' => $rst['id'],
               'area' => "{$post['province']},{$post['city']},{$post['county']}",
               'detailarea' => $post['detailarea']
            );
          $rst1 = M('tinfo')->save($data);
          if($rst1){
            $this->redirect('Mysetinfo');exit;
          }else{
            $this->error('非法操作', U('Mysetinfo'), 2);exit; 
          }
        }else{
           $tinfo = M('tinfo')->where(array('uid' => session('uid')))->find();
           $sql = "SELECT * FROM `tp_area` WHERE `id` IN ({$tinfo['area']})";
           $area = M()->query($sql);
           $this->assign('area', $area);
           $this->assign('detailarea', $tinfo['detailarea']);
           $this->display();
        }
    }
}
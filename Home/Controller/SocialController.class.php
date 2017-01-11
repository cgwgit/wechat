<?php
//曹国伟
//2017年1月7日16:22:09
namespace Home\Controller;
use Think\Controller;
class SocialController extends Controller {
	public function _initialize() {
	    if ($_SESSION['username'] == NULL) {
	        $this->success('请先登陆', U('Manager/login'),1);
	        exit();
	    }
    }
    //展示购买社保的页面
    public function social_buy(){
    	$cinfo = M('cinfo')->where(array('uid' =>session('uid')))->order('id desc')->find();
    	$this->assign('cinfo', $cinfo);
    	$this->display();
    }
    //社保参保方案
    public function cplan(){
    	$cid = I('get.cid');
    	$rst = M('city')->where(array('cid' => $cid))->find();
    	if($rst){
    		if(IS_POST){
    		$data = array(
	            'cid' => $cid,
	            'city' => I('post.city')
    		);
    		M('city')->where(array('cid' => $cid))->save($data);
    	    }
    	}else{
    		M('city')->add($data);
    	}
    	$cinfo = M('cinfo')->where(array('id' => $cid))->find();
    	$city = M('city')->where(array('cid' => $cid))->find();
    	$cinfo['city'] = $city['city'];
    	$this->assign('cinfo', $cinfo);
    	$this->display();
    }
      //保费明细   
     // endowment养老保险
    // medical医疗保险
    // unemployment失业保险
    // employment工伤保险
    // maternity生育保险
    // dabing大病保险
    // canjiren残疾人保障金
    // cbase参保基数
    // chargecount保险费用总计
    public function detail(){
    	$post = I('post.');
        $rst = $this->addcharge($post);
        if($rst){
            $chargeinfo = M('chargedetail')->where(array('cid' => $post['cid']))->order('id desc')->find();
       $this->assign('chargeinfo', $chargeinfo);   
       $this->display();    
        }

    }
    //社保险种收费明细
    public function chargedetail(){
        $cid = I('get.cid');
        $chargeinfo = M('chargedetail')->where(array('cid' => $cid,'status' =>0))->order('id desc')->find();
        $this->assign('chargeinfo', $chargeinfo);
    	$this->display();
    }
     //详细的保费计算，并添加数据到数据库
    public function addcharge($info){
        $endowment = '';
        $medical = '';
        $unemployment = '';
        $employment = '';
        $maternity = '';
        $dabing = '';
        $canjiren = '';
        $chargecount = '';
        $servicemoney = '';
        $allcount = '';
        $data = array(
            'cid' => $post['cid'],
            'endowment' => $endowment,
            'medical' => $medical,
            'unemployment' => $unemployment,
            'employment' => $employment,
            'maternity' => $maternity,
            'dabing' => $dabing,
            'canjiren' => $canjiren,
            'chargecount' => $chargecount,
            'servicemoney' => $servicemoney,
            'allcount' => $allcount,
        );
        $chargeinfo = M('chargedetail')->where(array('cid' => $info['cid'],'status' =>0))->order('id desc')->find();
        if($chargeinfo){
          return M('chargedetail')->where(array('id' => $chargeinfo['id']))->save($data);
        }else{
          return M('chargedetail')->add($data);  
        }

    }
    //订单信息
    public function orderinfo(){
    	$id = I('get.cid');
    	$cinfo = M('cinfo')->alias('`c`')->field('`c`.`cname`,`ch`.`chargecount`,`ch`.`servicemoney`,`ch`.`allcount`')->join('`tp_chargedetail` as ch on c.id=ch.cid')->order('ch.cid desc')->find();
    	$this->assign('cinfo',$cinfo);
    	$tinfo = M('tinfo')->where(array('uid' => session('uid')))->find();
    	if($tinfo){
    		$this->assign('tinfo', $tinfo);
    		$this->display();
    	}else{
    		$this->display();
    	}
    }
    //社保查询
    public function social(){
    	$this->display();
    }
}
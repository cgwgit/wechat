<?php
//曹国伟
//2017年1月12日09:54:35
namespace Home\Controller;
use Think\Controller;
class SocialfareController extends Controller {
	public function _initialize() {
	    if ($_SESSION['username'] == NULL) {
	        $this->success('请先登陆', U('Manager/login'),1);
	        exit();
	    }
    }
    //展示社保计算器页面
    public function jisuan(){
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
    // ctype参保类型(1社保0公积金)
    // ctime参保的时间
    // ordertime订单时间
    // order_sn订单号
    //社保费用计算
    public function socialfare(){
    	$post = I('post.');
    	if($post['ctype'] == '1'){
    		$data = $this->sumbaoxian($post);
    	}elseif($post['ctype'] == '0'){
            $data = $this->sumgj($post);
    	}else{
        	$data = cookie('data');
        }
        $this->assign('data', $data);
    	$this->display();
    }
    //保险险种明细
    public function baoxian(){
        $detail = cookie('data');
        $this->assign('detail', $detail);
        $this->display();
    }

    //计算保费明细
    public function sumbaoxian($info){
    	$base = '1';
    	$endowment = '1';
    	$medical = '1';
    	$unemployment = '1';
    	$employment = '1';
    	$maternity = '1';
    	$dabing = '1';
    	$canjiren = '1';
    	$count = '1';
    	$allcount = '1';
    	$ctime = '1';
    	$ccity = '';
    	$hcity = '';
    	$data = array(
            'base' => $base,
	    	'endowment' => $endowment,
	    	'medical' => $medical,
	    	'unemployment' => $unemployment,
	    	'employment' => $employment,
	    	'maternity' => $maternity,
	    	'dabing' => $dabing,
	    	'canjiren' => $canjiren,
	    	'count' => $count,
	    	'allcount' => $allcount,
	    	'ctime' => $ctime,
	    	'ccity' => $ccity,
	    	'hcity' => $hcity
    		);
    	// var_dump($data);die;
    	cookie('data', $data ,time()+3600);
    	return $data;
    }
    //计算公积金
    public function sumgj($info){
        $gjj = '1';
        $base = '1';
        $ctime = '1';
    	$ccity = '';
    	$hcity = '';
        $data = array(
        	'gjj' => $gjj,
        	'base' => $base,
        	'ctime' => $ctime,
	    	'ccity' => $ccity,
	    	'hcity' => $hcity
        );
        cookie('data', $data, time()+3600);
        return $data;
    }
   //公积金明细
    public function gjjdetail(){
    	$detail = cookie('data');
    	$this->assign('detail', $detail);
        $this->display();
    }
}
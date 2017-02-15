<?php
//曹国伟
//2017年1月12日09:54:35
namespace Home\Controller;
use Think\Controller;
//社保公积金费用查询计算器
class SocialfareController extends Controller {
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
        !empty($post['stype']) ? $stype = $post['stype'] : $err = '请选择参保类型';
        !empty($post['stime']) ? $stime = substr($post['stime'],0,7) :$err='请选择参保开始时间';
        !empty($post['etime']) ? $etime = substr($post['etime'],0,7) : $err = '请选择参保截止时间';
        is_numeric($post['sbase']) ? $sbase = $post['sbase'] : $err = '请填写正确的参保基数';
        is_numeric($post['gbase']) ? $gbase = $post['gbase'] : $err = '请填写正确的公积金基数';
        !empty($post['city']) ? $city = $post['city'] : $err = '请选择参保城市';
        if($err){
            $this->error($err,U('jisuan'),1);exit;
        }
        $time = strtotime($etime)-strtotime($stime);
        $months = $time/2592000;
        //计算社保.公积金
    	if($post['stype'][0] == 1 && !isset($post['stype'][1])){
            //计算社保费用
            $ctype = 1;
            $this->sumbaoxian($sbase,$ctype);
    	}elseif($post['stype'][0] == 2 && !isset($post['stype'][1])){
            echo "2";die;
    	}else{
        	echo "3";die;
        }
    	$this->display();
    }
    //保险险种明细
    public function baoxian(){
        $detail = cookie('data');
        $this->assign('detail', $detail);
        $this->display();
    }

    //计算社保保费
    public function sumbaoxian($sbase,$ctype){
        if($ctype  == 1){
            $wuxian['ctype'] = $ctype;
            $wuxian['endowment'] = $sbase*0.26;
            $wuxian['unemployment'] = $sbase*0.02;
            $wuxian['yiliao'] = $sbase*0.11;
            $wuxian['employment'] = $sbase*0.007;
            $wuxian['maternity'] = $sbase*0.01;
            $wuxian['service'] = $months*80;
            $wuxian['count'] = $wuxian['endowment']+$wuxian['unemployment']+$wuxian['yiliao']+$wuxian['employment']+$wuxian['maternity']+$wuxian['service'];
            $this->assign('wuxian',$wuxian);
        }
        $this->display();
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
    //保费明细
    public function detail(){
        $this->display();
    }
}
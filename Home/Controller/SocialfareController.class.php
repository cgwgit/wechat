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
        !empty($post['city']) ? $city = $post['city'] : $err = '请选择参保城市';
        if($err){
            $this->error($err,U('jisuan'),1);exit;
        }
        $time = strtotime($etime)-strtotime($stime);
        $months = round($time/2592000);
        $cinfo['city'] = $city;
        $cinfo['htype'] = $post['pay'];
        $cinfo['stime'] = $stime;
        $cinfo['etime'] = $etime;
        //计算社保.公积金
    	if($post['stype'][0] == 1 && !isset($post['stype'][1])){
            //计算社保费用
            is_numeric($post['sbase']) ? $sbase = $post['sbase'] : $err = '请填写正确的参保基数';
            if($err){
            $this->error($err,U('jisuan'),1);exit;
            }
            $ctype = 1;
            $this->sumbaoxian($sbase,$ctype,$cinfo,$months);exit;
    	}elseif($post['stype'][0] == 2 && !isset($post['stype'][1])){
            is_numeric($post['gbase']) ? $gbase = $post['gbase'] : $err = '请填写正确的公积金基数';
             if($err){
             $this->error($err,U('jisuan'),1);exit;
            }
            $ctype = 2;
            $this->sumbaoxian($gbase,$ctype,$cinfo,$months);exit;
    	}else{
        	$ctype = 3;
        	is_numeric($post['sbase']) ? $sbase = $post['sbase'] : $err = '请填写正确的参保基数';
        	is_numeric($post['gbase']) ? $gbase = $post['gbase'] : $err = '请填写正确的公积金基数';
        	if($err){
             $this->error($err,U('jisuan'),1);exit;
            }
        	$base['sbase'] = $sbase;
        	$base['gbase'] = $gbase; 
        	$this->sumbaoxian($base,$ctype,$cinfo,$months);exit;
        }
    }
    //保险险种明细
    public function baoxian(){
        $detail = cookie('data');
        $this->assign('detail', $detail);
        $this->display();
    }

    //计算保费
    public function sumbaoxian($sbase,$ctype,$cinfo,$months){
        if($ctype  == 1){
            $cinfo['ctype'] = 1;
            $cinfo['sbase'] = $sbase;
            $cinfo['months'] = $months;
            $wuxian['endowment'] = $sbase*0.26;
            $wuxian['unemployment'] = $sbase*0.02;
            $wuxian['yiliao'] = $sbase*0.11;
            $wuxian['employment'] = $sbase*0.007;
            $wuxian['maternity'] = $sbase*0.01;
            $wuxian['onecount'] = $wuxian['endowment']+$wuxian['unemployment']+$wuxian['yiliao']+$wuxian['employment']+$wuxian['maternity'];
            $wuxian['count'] = $wuxian['onecount']*$months;
            $wuxian['count'] = number_format($wuxian['count'],2);
            $wuxian['onecount'] = number_format($wuxian['onecount'],2);
            $this->assign('wuxian',$wuxian);
            $this->assign('cinfo',$cinfo);
        }elseif($ctype  == 2){
        	$cinfo['ctype'] =2;
            $cinfo['gbase'] = $sbase;
            $cinfo['months'] = $months;
            $gjj['gjj'] = $sbase*0.24;
            $gjj['count'] = $gjj['gjj']*$months;
            $gjj['count'] = number_format($gjj['count'],2);
            $this->assign('gjj', $gjj);
            $this->assign('cinfo', $cinfo);
        }else{
        	//五险计算
        	$cinfo['ctype'] = 3;
            $cinfo['sbase'] = $sbase['sbase'];
            $cinfo['gbase'] = $sbase['gbase'];
            $cinfo['months'] = $months;
            $wuxian['endowment'] = $sbase['sbase']*0.26;
            $wuxian['unemployment'] = $sbase['sbase']*0.02;
            $wuxian['yiliao'] = $sbase['sbase']*0.11;
            $wuxian['employment'] = $sbase['sbase']*0.007;
            $wuxian['maternity'] = $sbase['sbase']*0.01;
            $wuxian['onecount'] = $wuxian['endowment']+$wuxian['unemployment']+$wuxian['yiliao']+$wuxian['employment']+$wuxian['maternity'];
            $wuxian['count'] = $wuxian['onecount']*$months;
            //公积金计算
            $gjj['gjj'] = $sbase['gbase']*0.24;
            $gjj['count'] = $sbase['gbase']*0.24*$months;
            $cinfo['allcount'] = number_format($gjj['count']+$wuxian['count'],2);
            $gjj['count'] = number_format($gjj['count'],2);
            $wuxian['count'] = number_format($wuxian['count'],2);
            $wuxian['onecount'] = number_format($wuxian['onecount'],2);
            $this->assign('gjj', $gjj);
            $this->assign('wuxian',$wuxian);
            $this->assign('cinfo', $cinfo);
        }
        $this->display();
      }
      //五险计算
     public function wuxian(){

     }
     //公积金计算
     public function gjj(){
     	
     }
}
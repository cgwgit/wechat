<?php
//曹国伟
//2017年1月7日16:22:09
namespace Home\Controller;
use Think\Controller;
//与购买社保相关的信息
class SocialController extends Controller {
	public function _initialize() {
	    if ($_SESSION['username'] == NULL) {
	        $this->success('请先登陆', U('Manager/login'),1);
	        exit();
	    }
    }
    //展示购买社保的页面(社保购买first)
    public function social_buy(){
        $cid = $_GET['cid'];
        //判断一下是否有传过来的cid,如果没有，是从社保购买页面过来的，如果有，是从参保方案页面跳过来的
        if($cid){
          $cinfo = M('cinfo')->where(array('id' => $cid))->find();
          $city= M('city')->where(array('cid' => $cid))->find();
          $cinfo['ccity'] = $city['city'];
        }else{
          $cinfo = M('cinfo')->where(array('uid' =>session('uid')))->order('id desc')->find();
         $city= M('city')->where(array('cid' => $cinfo['id']))->find();
         $cinfo['ccity'] = $city['city'];  
        }
        $arr = explode(',', $cinfo['city']);
        $area = M('area')->find($arr[0]);
        $cinfo['province'] = $area['name'];
        $area = M('area')->find($arr[1]);
        $cinfo['citys'] = $area['name'];
        $area = M('area')->find($arr[2]);
        $cinfo['county'] = $area['name'];
    	$this->assign('cinfo', $cinfo);
    	$this->display();
    }
    //社保参保方案(社保购买second)
    public function cplan(){
    	$cid = I('get.cid');
        if(empty($cid)){
            $this->error('请填写参保人信息', U('social_buy',array('cid' => $cid)), 1);exit;
        }
    	$cinfo = M('cinfo')->where(array('id' => $cid))->find();
    	$city = M('city')->where(array('cid' => $cid))->find();
        if(empty($city['city'])){
            $this->error('参保城市不能为空', U('social_buy',array('cid' => $cid)), 1);exit;
        }
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
    // ctype参保类型(1社保0公积金)
    // ctime参保的时间
    // ordertime订单时间
    // order_sn订单号
    public function detail(){
        $post = I('post.');
        $cid = $post['cid']; 
        $rst = $this->addcharge($cid,$post);
        if($rst){
           $chargeinfo = D('chargedetail')->where(array('cid' => $cid))->find();
           $this->assign('chargeinfo', $chargeinfo);   
           $this->display();    
        }

    }
    //社保险种收费明细
    public function chargedetail(){
        $cid = I('get.cid');
        $id = I('get.id');
        $chargeinfo = M('chargedetail')->where(array('cid' => $cid,'status' =>'0'))->order('id desc')->find();
        $chargeinfo['sid'] = $id;
        $chargeinfo['endowment'] = number_format($chargeinfo['endowment'],2);
        $chargeinfo['yiliao'] = number_format($chargeinfo['yiliao'],2);
        $chargeinfo['unemployment'] = number_format($chargeinfo['unemployment'],2);
        $chargeinfo['employment'] = number_format($chargeinfo['employment'],2);
        $chargeinfo['maternity'] = number_format($chargeinfo['maternity'],2);
        $chargeinfo['wuxian'] = number_format($chargeinfo['wuxian'],2);
        $this->assign('chargeinfo', $chargeinfo);
    	$this->display();
    }
    //保费明细  
    //收费标准80/人 
    // endowment养老保险26%单位18%个人8%
    // medical医疗保险11%单位9%个人2%
    // unemployment失业保险1.5%个人0.5%
    // employment工伤保险0.7%个人0
    // maternity生育保险1%个人0
    // 住房公积金24%个人12%
    // cbase参保基数
    // chargecount保险费用总计
    // ctype参保类型(1社保0公积金)
    // ctime参保的时间
    // ordertime订单时间
    // order_sn订单号
     //详细的保费计算，并添加数据到数据库
    public function addcharge($cid,$post){
    	if(empty($post['stype'])){
    		$this->error('请选择参保类型',U('cplan',array('cid'=>$cid)),1);exit;
    	}
        //社保
        if($post['stype'][0] == 1 && !isset($post['stype'][1])){
            is_numeric($post['sbase']) ? $sbase = $post['sbase'] : $err = '社保基数不是一个数字';
            !empty($post['stime']) ? $stime = $post['stime'] : $err = '请选择社保起缴月份';
            !empty($post['etime']) ? $etime = $post['etime'] : $err = '请选择社保截止月份';
            if($err){
                $this->error($err, U('Social/cplan',array('cid' => $cid)), 1);exit;
            }
            $months = substr($etime, 5)-substr($stime, 5);
            if($months>0){
                //五险缴费
                $endowment = $sbase*0.26;
                $medical = $sbase*0.11;
                $unemployment = $sbase*0.02;
                $employment = $sbase*0.007;
                $maternity = $sbase*0.01;
                $wuxian = $endowment+$medical+$unemployment+$employment+$maternity;
                $chargecount = $wuxian;
                $servicemoney = 80;
                $allcount = ($wuxian+$servicemoney)*$months;
                $ctype = 1;
            }else{
                $this->error('社保月份选择错误', U('Social/cplan',array('cid' => $cid)), 1);exit;
            }

        }
        //公积金
         if($post['stype'][0] == 2 && !isset($post['stype'][1])){
            is_numeric($post['gbase']) ? $gbase = $post['gbase'] : $err = '公积金基数不是一个数字';
            !empty($post['gstime']) ? $gstime = $post['gstime'] : $err = '请选择公积金起缴月份';
            !empty($post['getime']) ? $getime = $post['getime'] : $err = '请选择公积金截止月份';
            if($err){
                $this->error($err, U('Social/cplan',array('cid' => $cid)), 1);exit;
            }
            $gmonths = substr($getime, 5)-substr($gstime, 5); 
            if($gmonths > 0){
                $gjj = $gbase*0.24;
                $chargecount = $gjj;
                $servicemoney = 80;
                $allcount = ($gjj+$servicemoney)*$gmonths;
                $ctype = 2;   
            }else{
                $this->error('公积金月份选择错误', U('Social/cplan',array('cid' => $cid)), 1);exit;
            }

         }
         //社保和公积金
         if($post['stype'][0] == 1 && $post['stype'][1] == 2){
            is_numeric($post['sbase']) ? $sbase = $post['sbase'] : $err = '社保基数不是一个数字';
            is_numeric($post['gbase']) ? $gbase = $post['gbase'] : $err = '公积金基数不是一个数字';
            !empty($post['gstime']) ? $gstime = $post['gstime'] : $err = '请选择公积金起缴月份';
            !empty($post['getime']) ? $getime = $post['getime'] : $err = '请选择公积金截止月份';
            !empty($post['stime']) ? $stime = $post['stime'] : $err = '请选择社保起缴月份';
            !empty($post['etime']) ? $etime = $post['etime'] : $err = '请选择社保截止月份';
            if($err){
                $this->error($err, U('Social/cplan',array('cid' => $cid)), 1);exit;
            }
            $months = substr($etime, 5)-substr($stime, 5);
            $gmonths = substr($getime, 5)-substr($gstime, 5);
            if($months > 0 && $gmonths > 0){
                //五险缴费
                $endowment = $sbase*0.26;
                $medical = $sbase*0.11;
                $unemployment = $sbase*0.02;
                $employment = $sbase*0.007;
                $maternity = $sbase*0.01;
                $wuxian = $endowment+$medical+$unemployment+$employment+$maternity;
                //公积金
                $gjj = $gbase*0.24;
                $chargecount = $wuxian+$gjj;
                $servicemoney =  160;
                $allcount = $wuxian*$months+$gjj*$gmonths+80*($months+$gmonths); 
                $ctype = 3;
            }else{
                $this->error('月份选择错误', U('Social/cplan',array('cid' => $cid)), 1);exit;
            }
       
         }
        $data = array(
            'cid' => $cid,
            'endowment' => isset($endowment) ? $endowment : 0,
            'unemployment' => isset($unemployment) ? $unemployment : 0,
            'yiliao' => isset($medical) ? $medical : 0,
            'employment' => isset($employment) ? $employment : 0,
            'maternity' => isset($maternity) ? $maternity : 0,
            'wuxian' => isset($wuxian) ? $wuxian : 0,
            'gjj' => isset($gjj) ? $gjj : 0,
            'sbase' => isset($sbase) ? $sbase : 0,
            'gbase' => isset($gbase) ? $gbase : 0,
            'stime' => isset($stime) ? $stime : 0,
            'etime' => isset($etime) ? $etime : 0,
            'gstime' => isset($gstime) ? $gstime : 0,
            'getime' => isset($getime) ? $getime : 0,
            'smonths' => isset($months) ? $months : 0,
            'gmonths' => isset($gmonths) ? $gmonths : 0,
            'chargecount' => isset($chargecount) ? $chargecount : 0,
            'servicemoney' => $servicemoney,
            'allcount' => $allcount,
            'order_sn' => makeSn(),
            'ordertime' => time(),
            'ctype' => $ctype
        );
        $chargeinfo = M('chargedetail')->where(array('cid' => $cid,'order_status' =>'0'))->find();
        if($chargeinfo){
           return M('chargedetail')->where(array('id' => $chargeinfo['id']))->save($data);
        }else{
          // $order = makeSn();
          // $data['order_sn'] = $order;
          return M('chargedetail')->add($data);  
        }

    }
    //订单信息
    public function orderinfo(){
    	$id = I('get.cid');
    	$cinfo = M('cinfo')->alias('`c`')->field('`c`.`cname`,`ch`.*')->join('`tp_chargedetail` as ch on c.id=ch.cid')->where(array('c.id' => $id))->find();
        $cinfo['sum'] =number_format($cinfo['wuxian']*$cinfo['smonths']+$cinfo['gjj']*$cinfo['gmonths'],2) ;
        $cinfo['service'] = number_format(80*$cinfo['smonths']+80*$cinfo['gmonths'],2);
        $cinfo['count'] = number_format($cinfo['sum']+$cinfo['service'],2);
    	$this->assign('cinfo',$cinfo);
        $this->assign('cid', $id);
        //查询投保人信息
    	$tinfo = M('tinfo')->where(array('uid' => session('uid')))->find();
    	if($tinfo){
    		$this->assign('tinfo', $tinfo);
    		$this->display();
    	}else{
    		$this->display();
    	}
    }

    //服务说明
    public function shuoming(){
        $this->display();
    }

    //选择参保城市
    public function selectCity(){
        $id = I('get.cid');
        if(IS_POST){
          $post = I('post.');
          $area = M('area')->where(array('id' => $post['city']))->find();
          if($post['jid']==2){
            $this->assign('city',$area['name']);
            $this->display('Socialfare/jisuan');exit;
          }
          $rst = M('city')->where(array('cid' =>$id))->find();
          if($rst){
           $data = array(
             'id' => $rst['id'],
             'city' => $area['name']
            );
          $result = M('city')->save($data);
          if($result){
            $this->redirect('social_buy',array('cid' => $id));exit;
          }
          }else{
            $data = array('cid' => $id,'city' => $area['name']);
            $result = M('city')->add($data);
            if($result){
                $this->redirect('social_buy',array('cid' => $id));exit;
            }
          }
        }
          if(I('get.jid')==2){
            $this->assign('jid',I('get.jid'));
          }
          $this->assign('id', $id);
          $this->display();
    }
}
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
    // ctype参保类型(1社保0公积金)
    // ctime参保的时间
    // ordertime订单时间
    // order_sn订单号
    public function detail(){
         $post = I('post.');
         $cid = $post['cid'];
         var_dump($post);die;
        $rst = $this->addcharge($cid,$post);
        if($rst){
            $chargeinfo = M('chargedetail')->where(array('cid' => $post['cid']))->order('id desc')->find();
           $this->assign('chargeinfo', $chargeinfo);   
           $this->display();    
        }

    }
    //社保险种收费明细
    public function chargedetail(){
        $cid = I('get.cid');
        $chargeinfo = M('chargedetail')->where(array('cid' => $cid,'status' =>'0'))->order('id desc')->find();
        $this->assign('chargeinfo', $chargeinfo);
    	$this->display();
    }
    //保费明细   
    // endowment养老保险28%单位20%个人8%
    // medical医疗保险12%单位10%个人2%
    // unemployment失业保险1.2%个人0.2%
    // employment工伤保险0.3%个人0
    // maternity生育保险0.8%个人0
    // dabing大病保险
    // canjiren残疾人保障金
    // 住房公积金24%个人12%
    // cbase参保基数
    // chargecount保险费用总计
    // ctype参保类型(1社保0公积金)
    // ctime参保的时间
    // ordertime订单时间
    // order_sn订单号
     //详细的保费计算，并添加数据到数据库
    public function addcharge($cid,$post){
        $sbase = $post['sbase'];
        $gbase = $post['gbase'];
        $stime = '';
        $gtime = '';
        $endowment = '';
        $medical = '1';
        $unemployment = '1';
        $employment = '1';
        $maternity = '1';
        $chargecount = '1';
        $servicemoney = '1';
        $allcount = '1';
        $order = makeSn();
        $data = array(
            'cid' => $cid,
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
            'order_sn' => $order,
            'order_time' => time(),
            'cbase' => '',
        );
        $chargeinfo = M('chargedetail')->where(array('cid' => $cid,'status' =>'0'))->find();
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
          $this->assign('id', $id);
          $this->display();
    }
}
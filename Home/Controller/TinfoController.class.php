<?php
//曹国伟
//2017年1月10日15:50:41
namespace Home\Controller;
use Think\Controller;
class TinfoController extends Controller{
	//添加投保人的用户信息展示页面
	public function addtinfo(){
		$cid = I('get.cid');
		$tinfo = M('tinfo')->where(array('uid' => session('uid')))->find();
		//判断投保人信息是否存在
		if($tinfo){
            $sql = "select * from tp_area where id in({$tinfo['area']})";
            $area = M()->query($sql);
            $this->assign('area', $area);
		    $this->assign('cid' ,$cid);
            $this->assign('tinfo', $tinfo);
		    $this->display('Tinfo/savetinfo');exit;
		}
		//判断是否有传过来的用户的id，如果有就显示编辑的页面，如果没有就显示添加的页面
		if(IS_POST){
			trim(I('post.tname')) ? $tname = trim(I('post.tname')) : $err = '用户名格式不正确';
            preg_match("/^1[3578][0-9]{9}$/", $_POST['tel']) ? $tel = trim($_POST['tel']) : $err = '请填写正确的投保人手机号';
            preg_match("/^[a-z0-9._%-]+@([a-z0-9-]+\.)+[a-z]{2,4}$/", $_POST['email']) ? $email = trim($_POST['email']) : $err = '请输入正确的邮箱地址';
            preg_match("/^1[3578][0-9]{9}$/", $_POST['jtel']) ? $jtel = trim($_POST['jtel']) : $err = '请填写正确的紧急联系人手机号';
            if($err){
            $this->error($err, U('addtinfo',array('cid'=>$cid)), 1);exit;
        }   
	       //获取城市信息
	        $province = I('post.province');
	        $city = I('post.city');
	        $county = I('post.county');
	        $area = $province.','.$city.','.$county;
	        $jname = trim(I('post.jname'));
	        $detailarea = I('post.detailarea');
	        $data = array(
	        	'uid' => $_SESSION['uid'],
	        	'tname' => $tname,
	        	'tel' => $tel,
	        	'email' => $email,
	        	'area' => $area,
	        	'detailarea' => $detailarea,
	        	'jname' => $jname,
	        	'jtel' => $jtel
	        	);
			$rst = M('tinfo')->add($data);
			if($rst && $cid){
				$this->redirect('Social/orderinfo',array('cid' => $cid));exit;
			}else{
				$this->redirect('My/Mysetinfo');exit;
			}
		}else{
		   $this->assign('cid', $cid);
           $this->display();
		}
	}
	//投保人信息提交页面
	public function savetinfo(){
	    $cid = I('get.cid');
	    $tinfo = M('tinfo')->where(array('uid' => session('uid')))->find();
		if(IS_POST){	
            trim(I('post.tname')) ? $tname = trim(I('post.tname')) : $err = '用户名格式不正确';
            preg_match("/^1[3578][0-9]{9}$/", $_POST['tel']) ? $tel = trim($_POST['tel']) : $err = '请填写正确的投保人手机号';
            preg_match("/^[a-z0-9._%-]+@([a-z0-9-]+\.)+[a-z]{2,4}$/", $_POST['email']) ? $email = trim($_POST['email']) : $err = '请输入正确的邮箱地址';
            preg_match("/^1[3578][0-9]{9}$/", $_POST['jtel']) ? $jtel = trim($_POST['jtel']) : $err = '请填写正确的紧急联系人手机号';
            if($err){
            $this->error($err, U('addtinfo',array('cid'=>$cid)), 1);exit;
        }   
	       //获取城市信息
	        $province = I('post.province');
	        $city = I('post.city');
	        $county = I('post.county');
	        $area = $province.','.$city.','.$county;
	        $jname = trim(I('post.jname'));
	        $detailarea = I('post.detailarea');
	        $data = array(
	        	'id' => $tinfo['id'],
	        	'tname' => $tname,
	        	'tel' => $tel,
	        	'email' => $email,
	        	'area' => $area,
	        	'detailarea' => $detailarea,
	        	'jname' => $jname,
	        	'jtel' => $jtel
	        	);
			$rst = M('tinfo')->save($data);
			if($rst){
				$this->redirect('Social/orderinfo',array('cid' => $cid));exit;
			}
        
		}else{
           $this->display();
		}
	}
}
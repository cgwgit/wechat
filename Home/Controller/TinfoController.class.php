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
			$area = M('area')->select($tinfo['area']);
            $this->assign('area', $area);
		    $this->assign('cid' ,$cid);
            $this->assign('tinfo', $tinfo);
		    $this->display('Tinfo/savetinfo');exit;
		}
		//判断是否有传过来的用户的id，如果有就显示编辑的页面，如果没有就显示添加的页面
		if(IS_POST){
			$cid = I('post.cid');
			trim(I('post.tname')) ? $tname = trim(I('post.tname')) : $err = '用户名格式不正确';
            preg_match("/^1[3578][0-9]{9}$/", $_POST['tel']) ? $tel = trim($_POST['tel']) : $err = '请填写正确的投保人手机号';
            preg_match("/^[a-z0-9._%-]+@([a-z0-9-]+\.)+[a-z]{2,4}$/", $_POST['email']) ? $email = trim($_POST['email']) : $err = '请输入正确的邮箱地址';
            if(!empty($_POST['jtel'])){
            preg_match("/^1[3578][0-9]{9}$/", $_POST['jtel']) ? $jtel = trim($_POST['jtel']) : $err = '请填写正确的紧急联系人手机号';
            }
            if($err){
            $this->error($err, U('addtinfo',array('cid'=>$cid)), 1);exit;
        }  
	        $jname = trim(I('post.jname'));
	        $area = I('post.province').','.I('post.city').','.I('post.county');
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
				$this->redirect('Social/orderinfo',array('cid' => $cid));exit;
			}
		}else{
		   $this->assign('cid', $cid);
           $this->display();
		}
	}
	//投保人信息提交页面
	public function savetinfo(){
	    $cid = I('post.cid');
	    $tinfo = M('tinfo')->where(array('uid' => session('uid')))->find();
		if(IS_POST){
            trim(I('post.tname')) ? $tname = trim(I('post.tname')) : $err = '用户名格式不正确';
            trim(I('post.detailarea')) ? $detailarea = trim(I('post.detailarea')) : $err = '详细地址名格式不正确';
            preg_match("/^[a-z0-9._%-]+@([a-z0-9-]+\.)+[a-z]{2,4}$/", $_POST['email']) ? $email = trim($_POST['email']) : $err = '请输入正确的邮箱地址';
            if(!empty($_POST['jtel'])){
            preg_match("/^1[3578][0-9]{9}$/", $_POST['jtel']) ? $jtel = trim($_POST['jtel']) : $err = '请填写正确的紧急联系人手机号';
            }
            if($err){
            $this->error($err, U('addtinfo',array('cid'=>$cid)), 1);exit;
          }   
	        $jname = trim(I('post.jname'));
	        $data = array(
	        	'id' => $tinfo['id'],
	        	'tname' => $tname,
	        	'email' => $email,
	        	'detailarea' => $detailarea,
	        	'jname' => $jname,
	        	'jtel' => $jtel
	        	);
			$rst = M('tinfo')->save($data);
			if($rst){
				$this->redirect('Social/orderinfo',array('cid' => $cid));exit;
			}else{
				$this->redirect('Social/orderinfo',array('cid' => $cid));exit;
			}
		}else{
           $this->display();
		}
	}

	//修改投保人地址
	public function editaddress(){
		if(IS_POST){
          //判断传过来的id,好跳转到不同的页面
          $post = I('post.');
          $rst = M('tinfo')->where(array('uid' => session('uid')))->find();
          $data = array(
               'id' => $rst['id'],
               'area' => "{$post['province']},{$post['city']},{$post['county']}",
            );
          $rst1 = M('tinfo')->save($data);
          if($rst1){
            $this->redirect('addtinfo');exit;
          }else{
            $this->error('非法操作', U('addtinfo'), 2);exit; 
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
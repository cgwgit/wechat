<?php
//曹国伟
//2017年2月18日16:57:30
namespace Admin\Controller;
use Think\Controller;
class SearchController extends Controller{
	public function _initialize() {
        if ($_SESSION['name'] == NULL) {
            $this->success('请先登陆', U('Manager/index'));
            exit();
        }
     } 
     //显示首页信息
     public function index(){
     	$post = I('post.');
     	$where = '2>1';
     	if(isset($post['tel']) && $post['tel'] != ''){
     		$tel = trim($post['tel']);
           $where .= " AND `tel` = '{$tel}'";
     	}
     	if(isset($post['sort']) && $post['sort'] != ''){
           if($post['sort'] == 1){
           	$order = '`retime` ASC';
           }elseif($post['sort'] == 2){
           	$order = '`retime` DESC';
           }
     	}
     	if(isset($post['date']) && $post['date'] != ''){
           $stime = substr($post['date'],0,10);
           $stime = strtotime($stime);
           $etime = substr($post['date'],15,11);
           $etime = strtotime($etime);
           $where .= " AND `retime` between '{$stime}' and '{$etime}'";
     	}
     	$count = M('user')->count();
     	$Page = new \Think\Page1($count,10);
     	$show = $Page->show();
     	$users = M('user')->where($where)->order($order)->limit($Page->firstRow.','.$Page->listRows)->select();
     	$this->assign('users',$users);
     	$this->assign('page',$show);
     	$this->display();
     }

     //参保人信息表
     public function cinfo(){
     	$post = I('post.');
     	$where = '2>1';
     	if(isset($post['idnumber']) && $post['idnumber'] != ''){
     		$idnumber = trim($post['idnumber']);
            $where .= " AND `idnumber` = '{$idnumber}'";
     	}
     	if(isset($post['cname']) && $post['cname'] != ''){
     		$cname = trim($post['cname']);
            $where .= " AND `cname` = '{$cname}'";
     	}
     	if(isset($post['status']) && $post['status'] != ''){
     		if($post['status'] == 1){
     			$where .= " AND `status` = '1'";
     		}elseif($post['status'] == 2){
                $where .= " AND `status` = '0'";
     		}
     	}
      if(isset($post['sdate']) && $post['sdate'] != ''){
           $stime = substr($post['sdate'],0,7);
           $where .= " AND `stime`='{$stime}'";
           $etime = substr($post['sdate'],15,7);
           $where .= " AND `etime`='{$etime}'";
     	}
     if(isset($post['gdate']) && $post['gdate'] != ''){
            $stime = substr($post['gdate'],0,7);
           $where .= " AND `gstime`='{$stime}'";
           $etime = substr($post['gdate'],15,7);
           $where .= " AND `getime`='{$etime}'";
     	}
       $count = M('cinfo')->count();
     	$Page = new \Think\Page1($count,10);
     	$show = $Page->show();
     	$users = M('cinfo')->join('tp_chargedetail on tp_cinfo.id=tp_chargedetail.cid')->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
     	$this->assign('cinfo',$users);
     	$this->assign('page',$show);
     	$this->display();
     }
     //投保人信息表
     public function tinfo(){
      $post = I('post.');
      $where = '2>1';
      if(isset($post['tname']) && $post['tname'] != ''){
            $tname = trim($post['tname']);
            $where .= " AND `tname` = '{$tname}'";
      }
      if(isset($post['cname']) && $post['cname'] != ''){
            $cname = trim($post['cname']);
            $where .= " AND `cname` = '{$cname}'";
      }
     	$count = M('cinfo')->count();
      $Page = new \Think\Page1($count,10);
      $show = $Page->show();
      $users = M('tinfo')->join('tp_cinfo on tp_tinfo.uid=tp_cinfo.uid')->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
      $this->assign('tinfo',$users);
      $this->assign('page',$show);
      $this->display();
     }
}
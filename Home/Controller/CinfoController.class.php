<?php
//曹国伟
//2017年1月9日17:13:03
namespace Home\Controller;
use Think\Controller;
class CinfoController extends Controller {
	public function _initialize(){
	    if ($_SESSION['username'] == NULL) {
	        $this->success('请先登陆', U('Manager/login'),1);
	        exit();
	    }
    }
    //增加参保人的页面
    public function addperson(){
      if(IS_POST){
        trim(I('post.cname')) ? $cname = trim(I('post.cname')) : $err = '用户名格式不正确';
        preg_match("/^1[3578][0-9]{9}$/", $_POST['mobile']) ? $tel = trim($_POST['mobile']) : $err = '请填写正确的手机号';
        preg_match("/^(\d{15}$|^\d{18}$|^\d{17}(\d|X|x))$/", $_POST['idCard']) ? $sfz = $_POST['idCard'] : $err = '请填写正确的身份证号';
        $city = I('post.city');
        $htype = I('post.htype');
        $data = array(
        	'uid' => $_SESSION['uid'],
        	'cname' => $cname,
        	'idnumber' => $sfz,
        	'mphone' => $tel,
        	'city' => $city,
        	'htype' => $htype
        	);
        $id = M('cinfo')->add($data);
        if($id){
        	$this->idpicture($id);
        }else{
        	$this->error('参保人信息添加失败,请重新填写', U('addperson'), 1);
        }
      }else{
      	$this->display();
      }
    }
    //修改参保人信息页面
    public function editperson(){
        if(IS_POST){
            trim(I('post.cname')) ? $cname = trim(I('post.cname')) : $err = '用户名格式不正确';
            preg_match("/^1[3578][0-9]{9}$/", $_POST['mobile']) ? $tel = trim($_POST['mobile']) : $err = '请填写正确的手机号';
            preg_match("/^(\d{15}$|^\d{18}$|^\d{17}(\d|X|x))$/", $_POST['idCard']) ? $sfz = $_POST['idCard'] : $err = '请填写正确的身份证号';
            $city = I('post.city');
            $htype = I('post.htype');
            $id = $_POST['id'];
            $data = array(
                'id' => $id,
                'uid' => $_SESSION['uid'],
                'cname' => $cname,
                'idnumber' => $sfz,
                'mphone' => $tel,
                'city' => $city,
                'htype' => $htype
                );
            $rst = M('cinfo')->save($data);
            $this->edidpicture($id);
        }else{
            //显示编辑的参保人信息页面
            $cid = I('get.cid');
            $cinfo = M('cinfo')->where(array('id' => $cid))->find();
            $idpictures = M('idpicture')->where(array('cid' => $cinfo['id']))->select();
            $cinfo['zpic'] =  $idpictures[0]['pic'];
            $cinfo['fpic'] =  $idpictures[1]['pic'];
            // var_dump($cinfo);die;
            $this->assign('cinfo', $cinfo);
            $this->display();
        }
    }
    //身份证图片上传
    public function idpicture($id){
        //判断是否有上传相册，遍历error的信息即可，只有有一个为"0"
        //就给做上传处理
        $up_pics = false;
        foreach($_FILES['pics_tu']['error'] as $k => $v){
            if($v === 0){
                $up_pics = true;
                break;
            }else{
            	$this->error('请选择上传身份证图片', U('addperson'), 2);
            }
        }
        if($up_pics === true){
            $cfg = array(
                'rootPath'      =>  './Public/Upload/', //保存根路径
                'exts'          =>  array('jpg','jpeg','png','gif'), //允许上传的文件后缀
            );
            $up = new \Think\Upload($cfg);
            //$_FILES: logo_tu和pics_tu两部分附件
            //upload(array('pics_tu'=>array(name=>123,error=>,tmp_name=>,size=>,type=>)))
            $z = $up -> upload(array('pics_tu'=>$_FILES['pics_tu']));
            // var_dump($z);die;
            //遍历$z,并制作缩略图，完成sp_goods_pics数据表的记录填充
            $arr = array();
            foreach($z as $m => $n){
                //小图：50*50  中图:350*350  大图:800*800
                $im = new \Think\Image();
                $yuan_pics = $up->rootPath.$n['savepath'].$n['savename'];
                $im -> open($yuan_pics);
                $im -> thumb(800,800,6);
                $small_pics = $up->rootPath.$n['savepath'].'s_'.$n['savename'];
                $im -> save($small_pics);
                $arr['cid'] = $id;
                $arr['pic'] = $yuan_pics;
                $arr['small_pics'] = $small_pics;
                D('idpicture')->add($arr);
            }
            // $this->success('社保人员信息添加成功', U('Social/social_buy') ,2);
            // echo U('Social/social_buy');die;
            $this->redirect('Social/social_buy');
        }
        
    }
    //身份证图片修改操作
    public function edidpicture($cid){
        foreach($_FILES['pics_tu']['error'] as $k => $v){
            if($v === 0){
                $up_pics = true;
                break;
            }else{
            	$this->redirect('Social/social_buy');exit;
            }
        }
        if($up_pics === true){
	        $picpaths = D('idpicture')->where(array('cid' => $cid))->select();
	    	foreach ($picpaths as $key => $value) {
	    		$path = substr($value['pic'], 2);
	    		$filename = SITE_URL.$path;
	    		unlink($filename);
	    	}
	    	D('idpicture')->where(array('cid' => $cid))->delete();
	        $up_pics = false;
	            $cfg = array(
	                'rootPath'      =>  './Public/Upload/', //保存根路径
	                'exts'          =>  array('jpg','jpeg','png','gif'), //允许上传的文件后缀
	            );
            $up = new \Think\Upload($cfg);
            //$_FILES: logo_tu和pics_tu两部分附件
            //upload(array('pics_tu'=>array(name=>123,error=>,tmp_name=>,size=>,type=>)))
            $z = $up -> upload(array('pics_tu'=>$_FILES['pics_tu']));
            // var_dump($z);die;
            $arr = array();
            foreach($z as $m => $n){
                //小图：50*50  中图:350*350  大图:800*800
                $im = new \Think\Image();
                $yuan_pics = $up->rootPath.$n['savepath'].$n['savename'];
                $im -> open($yuan_pics);
                $im -> thumb(800,800,6);
                $small_pics = $up->rootPath.$n['savepath'].'s_'.$n['savename'];
                $im -> save($small_pics);
                $arr['cid'] = $cid;
                $arr['pic'] = $yuan_pics;
                $arr['small_pics'] = $small_pics;
                D('idpicture')->add($arr);
            }
            $this->success('社保人员信息修改成功', U('Social/social_buy') ,2);
        }
    }

    //删除参保人员信息
    public function delperson(){
    	$cid = I('get.cid');
    	//删除用户信息和图片
    	$picpaths = D('idpicture')->where(array('cid' => $cid))->select();
    	foreach ($picpaths as $key => $value) {
			unlink($value['pic']);
			unlink($value['small_pics']);
    	}
    	M('idpicture')->where(array('cid' => $cid))->delete();
    	$rst = M('cinfo')->where(array('id' => $cid))->delete();
    	if($rst){
    		// echo U('Social/social_buy');die;
    		$this->redirect('Social/social_buy');	
    	}
    }
    //选择参保人页面
    public function selectperson(){
        $cid = I('get.cid');
        $persons = M('cinfo')->where(array('uid' => session('uid')))->order('id desc')->select();
        $this->assign('persons', $persons);
        $this->assign('cid', $cid);
        $this->display();
    }
    //三级联动地区
    //得到所有的省份(一级)
    public function getProvinces(){
       $provinces = M('area')->where(array('type' =>1))->field('id,name')->select();
       var_dump($provinces);die;
    }
    //得到城市(二级)
    public function getCitys(){
       $pid = I('get.pid');
       $citys = M('area')->where(array('parent_id' => $pid))->field('id,name')->select();
       var_dump($citys);die;
    }
    //得到县(三级)
    public function getCountys(){
       $xpid = I('get.xpid');
       $countys = M('area')->where(array('parent_id' => $xpid))->field('id,name')->select();
       var_dump($countys);die;
    }
 }
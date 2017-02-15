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
        if($err){
            $this->error($err, U('addperson'), 1);exit;
        }   
       //获取城市信息
        $province = I('post.province');
        $city = I('post.city');
        $county = I('post.county');
        $area = $province.','.$city.','.$county;
        $htype = I('post.htype');
        $data = array(
        	'uid' => $_SESSION['uid'],
        	'cname' => $cname,
        	'idnumber' => $sfz,
        	'mphone' => $tel,
        	'city' => $area,
        	'htype' => $htype,
            'status' => '0'
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
            if($err){
                $this->error($err, U('editperson'), 1);exit;
            }
            //获取城市信息
            $province = I('post.province');
            $city = I('post.city');
            $county = I('post.county');
            $area = $province.','.$city.','.$county;
            $htype = I('post.htype');
            $id = $_POST['id'];
            $data = array(
                'id' => $id,
                'uid' => $_SESSION['uid'],
                'cname' => $cname,
                'idnumber' => $sfz,
                'mphone' => $tel,
                'city' => $area,
                'htype' => $htype
                );
            $rst = M('cinfo')->save($data);
            $this->editpicture($id);
        }else{
            //显示编辑的参保人信息页面
            $cid = I('get.cid');
            $cinfo = M('cinfo')->where(array('id' => $cid))->find();
            $sql = "select * from tp_area where id in({$cinfo['city']})";
            $area = M()->query($sql);
            $idpictures = M('idpicture')->where(array('cid' => $cinfo['id']))->find();
            $cinfo['small_pics'] =  $idpictures['small_pics'];
            $this->assign('area', $area);
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
                M('cinfo')->delete($id);
            	$this->error('图片过大,请重新上传', U('addperson'), 2);
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
            $this->success('参保人员信息保存', U('My/ncperson') ,2);
        }
        
    }
    //身份证图片修改操作
    public function editpicture($cid){
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
                unlink($value['pic']);
                unlink($value['small_pics']);
            }
	            $cfg = array(
	                'rootPath'      =>  './Public/Upload/', //保存根路径
	                'exts'          =>  array('jpg','jpeg','png','gif'), //允许上传的文件后缀
	            );
            $up = new \Think\Upload($cfg);
            //$_FILES: logo_tu和pics_tu两部分附件
            //upload(array('pics_tu'=>array(name=>123,error=>,tmp_name=>,size=>,type=>)))
            $z = $up -> upload(array('pics_tu'=>$_FILES['pics_tu']));
            $id = M('idpicture')->where(array('cid'=>$cid))->find();
            $arr = array();
            foreach($z as $m => $n){
                //小图：50*50  中图:350*350  大图:800*800
                $im = new \Think\Image();
                $yuan_pics = $up->rootPath.$n['savepath'].$n['savename'];
                $im -> open($yuan_pics);
                $im -> thumb(800,800,6);
                $small_pics = $up->rootPath.$n['savepath'].'s_'.$n['savename'];
                $im -> save($small_pics);
                $arr['id'] = $id['id'];
                $arr['pic'] = $yuan_pics;
                $arr['small_pics'] = $small_pics;
               $rst = D('idpicture')->where(array('cid'=>$cid))->save($arr);
            }
            $this->redirect('Social/social_buy',array('cid' => $cid));exit;
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
    		// $this->redirect('Social/social_buy');
               $this->success('删除成功',U('selectperson'), 1); 	
    	}
    }
    //选择参保人页面
    public function selectperson(){
        $cid = I('get.cid');
        $persons = M('cinfo')->where(array('uid' => session('uid')))->order('id desc')->select();
        foreach ($persons as $key => $value) {
          $arr = explode(',', $value['city']);
          $rst = M('area')->where(array('id' => $arr['0']))->find();
          $persons[$key]['province'] = $rst['name']; 
          $rst = M('area')->where(array('id' => $arr['1']))->find();
          $persons[$key]['citys'] = $rst['name']; 
          $rst = M('area')->where(array('id' => $arr['2']))->find();
          $persons[$key]['county'] = $rst['name'];
      }
        $this->assign('persons', $persons);
        $this->assign('cid', $cid);
        $this->display();
    }
 }